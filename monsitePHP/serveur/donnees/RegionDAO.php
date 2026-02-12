<?php
declare(strict_types=1);

require_once __DIR__ . '/../Connexion.php';
require_once __DIR__ . '/../modele/Region.php';

class RegionDAO
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = Connexion::getInstance();
    }

    /**
     * @return Region[]
     */
    public function lister(): array
    {
        $sql = "SELECT id, nom, description, image FROM region ORDER BY id";
        $statement = $this->pdo->query($sql);

        $liste = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $liste[] = new Region($row); // filtrage fait dans le modèle
        }
        return $liste;
    }

    public function chercherParId(int $id): ?Region
    {
        $idFiltre = filter_var($id, FILTER_VALIDATE_INT);
        if ($idFiltre === false) {
            return null;
        }

        $sql = "SELECT id, nom, description, image FROM region WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $idFiltre, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) return null;

        return new Region($row);
    }

    /**
     * Ajouter une région
     * Retourne l'id créé
     */
    public function ajouter(Region $region): int
    {
        if (!$region->estValide()) {
            return 0;
        }

        $sql = "INSERT INTO region (nom, description, image)
                VALUES (:nom, :description, :image)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            ':nom' => $region->getNom(),
            ':description' => $region->getDescription(),
            ':image' => $region->getImage()
        ]);

        return (int)$this->pdo->lastInsertId();
    }
}
