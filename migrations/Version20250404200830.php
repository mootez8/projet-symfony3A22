<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250404200830 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE events ADD sponsor_id INT NOT NULL, DROP nomSp
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE events ADD CONSTRAINT FK_5387574A12F7FB51 FOREIGN KEY (sponsor_id) REFERENCES sponsors (idsponsor)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_5387574A12F7FB51 ON events (sponsor_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reclamation CHANGE date date DATE DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE events DROP FOREIGN KEY FK_5387574A12F7FB51
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_5387574A12F7FB51 ON events
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE events ADD nomSp VARCHAR(255) NOT NULL, DROP sponsor_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT 'NULL' COMMENT '(DC2Type:datetime_immutable)'
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reclamation CHANGE date date DATE DEFAULT 'NULL'
        SQL);
    }
}
