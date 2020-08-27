<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200803121826 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE compte (id INT AUTO_INCREMENT NOT NULL, id_personne_id INT DEFAULT NULL, id_entreprise_id INT DEFAULT NULL, numero VARCHAR(255) NOT NULL, type_compte VARCHAR(255) NOT NULL, date DATETIME NOT NULL, INDEX IDX_CFF65260BA091CE5 (id_personne_id), INDEX IDX_CFF652601A867E8F (id_entreprise_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF65260BA091CE5 FOREIGN KEY (id_personne_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF652601A867E8F FOREIGN KEY (id_entreprise_id) REFERENCES entreprise (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE compte');
    }
}
