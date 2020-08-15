<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200813192507 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE item_grade (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(60) NOT NULL, color VARCHAR(60) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE gloves ADD item_grade_id INT NOT NULL');
        $this->addSql('ALTER TABLE gloves ADD CONSTRAINT FK_1A4E48DE92146963 FOREIGN KEY (item_grade_id) REFERENCES item_grade (id)');
        $this->addSql('CREATE INDEX IDX_1A4E48DE92146963 ON gloves (item_grade_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gloves DROP FOREIGN KEY FK_1A4E48DE92146963');
        $this->addSql('DROP TABLE item_grade');
        $this->addSql('DROP INDEX IDX_1A4E48DE92146963 ON gloves');
        $this->addSql('ALTER TABLE gloves DROP item_grade_id');
    }
}
