<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220721035238 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE fournisseur_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE stock_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE fournisseur (id INT NOT NULL, nom_fournisseur VARCHAR(255) NOT NULL, phone VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE stock (id INT NOT NULL, id_produit_id INT NOT NULL, id_fournisseur_id INT NOT NULL, date_fourni TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, date_fabrication DATE NOT NULL, date_peremption DATE NOT NULL, quantite INT NOT NULL, prix_achat DOUBLE PRECISION NOT NULL, prix_vente DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_4B365660AABEFE2C ON stock (id_produit_id)');
        $this->addSql('CREATE INDEX IDX_4B3656605A6AC879 ON stock (id_fournisseur_id)');
        $this->addSql('ALTER TABLE stock ADD CONSTRAINT FK_4B365660AABEFE2C FOREIGN KEY (id_produit_id) REFERENCES product (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE stock ADD CONSTRAINT FK_4B3656605A6AC879 FOREIGN KEY (id_fournisseur_id) REFERENCES fournisseur (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE stock DROP CONSTRAINT FK_4B3656605A6AC879');
        $this->addSql('DROP SEQUENCE fournisseur_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE stock_id_seq CASCADE');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE stock');
    }
}
