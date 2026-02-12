<?php
declare(strict_types=1);

class Region
{
    public static array $filtres = [
        'id'          => FILTER_VALIDATE_INT,
        'nom'         => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'description' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'image'       => FILTER_SANITIZE_FULL_SPECIAL_CHARS
    ];

    protected ?int $id;
    protected string $nom;
    protected string $description;
    protected string $image;

    public array $erreurs = [];

    public function __construct(array $tab = [])
    {
        // Filtrage
        $tab = filter_var_array($tab, self::$filtres);

        $this->id          = $tab['id'] ?? null;
        $this->nom         = $tab['nom'] ?? '';
        $this->description = $tab['description'] ?? '';
        $this->image       = $tab['image'] ?? '';
    }

    // Getters
    public function getId(): ?int { return $this->id; }
    public function getNom(): string { return $this->nom; }
    public function getDescription(): string { return $this->description; }
    public function getImage(): string { return $this->image; }


   function encodeText (string $v): string {
        return htmlspecialchars($v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
  }
    public function getDescriptionAffichable(): string
    {
        $texte = html_entity_decode($this->description, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        return nl2br(htmlspecialchars($texte, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'));
    }
}
