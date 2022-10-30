<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221021113143 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE token CHANGE type type VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE trick ADD main_media_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE trick ADD CONSTRAINT FK_D8F0A91E33BDCC00 FOREIGN KEY (main_media_id) REFERENCES media (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D8F0A91E33BDCC00 ON trick (main_media_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE token CHANGE type type LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\'');
        $this->addSql('ALTER TABLE trick DROP FOREIGN KEY FK_D8F0A91E33BDCC00');
        $this->addSql('DROP INDEX UNIQ_D8F0A91E33BDCC00 ON trick');
        $this->addSql('ALTER TABLE trick DROP main_media_id');
    }
}
