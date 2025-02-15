# Suitable Opdracht

## Beschrijving
Dit project is een webapplicatie die dient als een platform voor gebruikers om berichten achter te laten in een gastenboek en om contact op te nemen via een contactformulier. Het is ontwikkeld met PHP en maakt gebruik van een MySQL-database.

[![PHP Composer](https://github.com/gurkanozil/SuitableOpdracht/actions/workflows/php.yml/badge.svg)](https://github.com/gurkanozil/SuitableOpdracht/actions/workflows/php.yml)

## Vereisten
- PHP 7.4 of hoger
- Composer
- MySQL

## Installatie

1. Clone de repository:
   ```bash
   git clone https://github.com/gurkanozil/suitable-opdracht.git
   cd suitable-opdracht
   ```

2. Installeer de afhankelijkheden met Composer:
   ```bash
   composer install
   ```

3. Maak de database aan:
   Voer het SQL-script uit dat zich in de `.databasecreatie` bevindt om de benodigde tabellen te creëren.

4. Configureer de databaseverbinding:
   Pas de database-instellingen aan in de bestanden `src/over_ons.php` en `src/gastenboek.php` indien nodig.

## Gebruik
- Ga naar de homepagina om de applicatie te bekijken.
- Gebruik het contactformulier om berichten te verzenden.
- Bekijk en voeg berichten toe in het gastenboek.

## Bijdragen
Bijdragen zijn welkom! Voel je vrij om een pull request in te dienen.

## Licentie
Dit project is gelicentieerd onder de MIT-licentie. Zie het bestand `LICENSE` voor meer informatie.

## Auteurs
- Gurkan M. Ozil