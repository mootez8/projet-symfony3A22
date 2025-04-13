<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250409141803 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajoute une relation entre Event et Sponsor, ajuste des colonnes et indices';
    }

    public function up(Schema $schema): void
    {
        // Ajout de la colonne sponsor_id et de la contrainte de clé étrangère
        $this->addSql(<<<'SQL'
            ALTER TABLE events ADD sponsor_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE events ADD CONSTRAINT FK_5387574A12F7FB51 FOREIGN KEY (sponsor_id) REFERENCES sponsors (idsponsor)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_5387574A12F7FB51 ON events (sponsor_id)
        SQL);

        // Modification de la colonne nomSponsor (anciennement nomSp)
        // Cette partie est adaptée pour correspondre au schéma actuel de la table sponsors
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsors CHANGE nomSponsor nomSponsor VARCHAR(255) NOT NULL
        SQL);

        // Si nécessaire, renommez un index existant sur sponsors
        // Cette ligne doit être supprimée si l'index n'existe pas
        // $this->addSql(<<<'SQL'
        //     ALTER TABLE sponsors RENAME INDEX nomsponsor TO UNIQ_9A31550F37CD889C
        // SQL);

        // Modification d'autres tables si nécessaire
        $this->addSql(<<<'SQL'
            ALTER TABLE historique CHANGE date_action date_action DATETIME NOT NULL, CHANGE idEvent id_event INT NOT NULL
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
        // Inverse des opérations effectuées dans la méthode up
        $this->addSql(<<<'SQL'
            ALTER TABLE events DROP FOREIGN KEY FK_5387574A12F7FB51
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_5387574A12F7FB51 ON events
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE events DROP sponsor_id
        SQL);

        // Annuler les modifications de la colonne nomSponsor
        $this->addSql(<<<'SQL'
            ALTER TABLE sponsors CHANGE nomSponsor nomSponsor VARCHAR(255) NOT NULL
        SQL);

        // Renommer l'index si nécessaire
        // Cette ligne doit être supprimée si l'index n'existe pas
        // $this->addSql(<<<'SQL'
        //     ALTER TABLE sponsors RENAME INDEX uniq_9a31550f37cd889c TO nomSponsor
        // SQL);

        // Annulation des autres modifications
        $this->addSql(<<<'SQL'
            ALTER TABLE historique CHANGE date_action date_action DATETIME DEFAULT 'current_timestamp()' NOT NULL, CHANGE id_event idEvent INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT 'NULL' COMMENT '(DC2Type:datetime_immutable)'
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reclamation CHANGE date date DATE DEFAULT 'NULL'
        SQL);
    }
}
