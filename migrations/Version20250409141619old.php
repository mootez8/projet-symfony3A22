<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250409141619 extends AbstractMigration
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
            ALTER TABLE historique CHANGE date_action date_action DATETIME NOT NULL, CHANGE idEvent id_event INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reclamation CHANGE date date DATE DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsors CHANGE nomSponsor nomSponsor VARCHAR(20) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsors RENAME INDEX unique_nom_sponsor TO UNIQ_9A31550F37CD889C
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
            ALTER TABLE historique CHANGE date_action date_action DATETIME DEFAULT 'current_timestamp()' NOT NULL, CHANGE id_event idEvent INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT 'NULL' COMMENT '(DC2Type:datetime_immutable)'
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reclamation CHANGE date date DATE DEFAULT 'NULL'
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsors CHANGE nomSponsor nomSponsor VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsors RENAME INDEX uniq_9a31550f37cd889c TO unique_nom_sponsor
        SQL);
    }
}
