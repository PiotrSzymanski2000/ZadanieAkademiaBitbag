<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210921123648 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'add color and displayColor columns to sylius_product table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sylius_product ADD color VARCHAR(255) DEFAULT NULL, ADD displayColor TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sylius_product DROP color, DROP displayColor');
    }
}
