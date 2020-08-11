<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200811091459 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE armor (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(60) NOT NULL, attack_power SMALLINT DEFAULT NULL, defense_power SMALLINT DEFAULT NULL, health_points SMALLINT DEFAULT NULL, maximum_mana SMALLINT DEFAULT NULL, regen_mana SMALLINT NOT NULL, move_speed SMALLINT DEFAULT NULL, magic_regen SMALLINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `character` (id INT AUTO_INCREMENT NOT NULL, weapon_id INT DEFAULT NULL, profession_id INT NOT NULL, sub_weapon_id INT DEFAULT NULL, helmet_id INT DEFAULT NULL, armor_id INT DEFAULT NULL, gloves_id INT DEFAULT NULL, shoes_id INT DEFAULT NULL, family_id INT NOT NULL, name VARCHAR(60) NOT NULL, level SMALLINT NOT NULL, INDEX IDX_937AB03495B82273 (weapon_id), INDEX IDX_937AB034FDEF8996 (profession_id), INDEX IDX_937AB03487B564CD (sub_weapon_id), INDEX IDX_937AB0344D4A700C (helmet_id), INDEX IDX_937AB034F5AA3663 (armor_id), INDEX IDX_937AB0344892748A (gloves_id), INDEX IDX_937AB034B75E1D7A (shoes_id), INDEX IDX_937AB034C35E566A (family_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE character_profession (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(60) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gloves (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(602) NOT NULL, attack_power SMALLINT DEFAULT NULL, defense_power SMALLINT DEFAULT NULL, maximum_mana SMALLINT DEFAULT NULL, crit_chance NUMERIC(5, 2) DEFAULT NULL, magic_regen SMALLINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE helmet (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(60) NOT NULL, attack_power SMALLINT DEFAULT NULL, defense_power SMALLINT DEFAULT NULL, crit_chance NUMERIC(5, 2) DEFAULT NULL, maximum_mana SMALLINT DEFAULT NULL, magic_regen SMALLINT DEFAULT NULL, attack_speed NUMERIC(5, 2) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE shoes (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(60) NOT NULL, attack_power SMALLINT DEFAULT NULL, defense_power SMALLINT DEFAULT NULL, maximum_mana SMALLINT DEFAULT NULL, magic_regen NUMERIC(5, 2) DEFAULT NULL, attack_speed NUMERIC(5, 2) DEFAULT NULL, crit_chance NUMERIC(5, 2) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sub_weapon (id INT AUTO_INCREMENT NOT NULL, attack_power SMALLINT DEFAULT NULL, defense_power SMALLINT DEFAULT NULL, crit_chance SMALLINT DEFAULT NULL, move_speed SMALLINT DEFAULT NULL, name VARCHAR(60) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE weapon (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(60) NOT NULL, attack_power SMALLINT DEFAULT NULL, defense_power SMALLINT DEFAULT NULL, crit_chance SMALLINT DEFAULT NULL, attack_speed SMALLINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `character` ADD CONSTRAINT FK_937AB03495B82273 FOREIGN KEY (weapon_id) REFERENCES weapon (id)');
        $this->addSql('ALTER TABLE `character` ADD CONSTRAINT FK_937AB034FDEF8996 FOREIGN KEY (profession_id) REFERENCES character_profession (id)');
        $this->addSql('ALTER TABLE `character` ADD CONSTRAINT FK_937AB03487B564CD FOREIGN KEY (sub_weapon_id) REFERENCES sub_weapon (id)');
        $this->addSql('ALTER TABLE `character` ADD CONSTRAINT FK_937AB0344D4A700C FOREIGN KEY (helmet_id) REFERENCES helmet (id)');
        $this->addSql('ALTER TABLE `character` ADD CONSTRAINT FK_937AB034F5AA3663 FOREIGN KEY (armor_id) REFERENCES armor (id)');
        $this->addSql('ALTER TABLE `character` ADD CONSTRAINT FK_937AB0344892748A FOREIGN KEY (gloves_id) REFERENCES gloves (id)');
        $this->addSql('ALTER TABLE `character` ADD CONSTRAINT FK_937AB034B75E1D7A FOREIGN KEY (shoes_id) REFERENCES shoes (id)');
        $this->addSql('ALTER TABLE `character` ADD CONSTRAINT FK_937AB034C35E566A FOREIGN KEY (family_id) REFERENCES family (id)');
        $this->addSql('ALTER TABLE family DROP characters');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `character` DROP FOREIGN KEY FK_937AB034F5AA3663');
        $this->addSql('ALTER TABLE `character` DROP FOREIGN KEY FK_937AB034FDEF8996');
        $this->addSql('ALTER TABLE `character` DROP FOREIGN KEY FK_937AB0344892748A');
        $this->addSql('ALTER TABLE `character` DROP FOREIGN KEY FK_937AB0344D4A700C');
        $this->addSql('ALTER TABLE `character` DROP FOREIGN KEY FK_937AB034B75E1D7A');
        $this->addSql('ALTER TABLE `character` DROP FOREIGN KEY FK_937AB03487B564CD');
        $this->addSql('ALTER TABLE `character` DROP FOREIGN KEY FK_937AB03495B82273');
        $this->addSql('DROP TABLE armor');
        $this->addSql('DROP TABLE `character`');
        $this->addSql('DROP TABLE character_profession');
        $this->addSql('DROP TABLE gloves');
        $this->addSql('DROP TABLE helmet');
        $this->addSql('DROP TABLE shoes');
        $this->addSql('DROP TABLE sub_weapon');
        $this->addSql('DROP TABLE weapon');
        $this->addSql('ALTER TABLE family ADD characters LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\'');
    }
}
