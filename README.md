# Esercizio: Laravel: Migration & Seeder (20/03/2024)
nome repo: `laravel-migration-seeder`

Creiamo una tabella trains tramite la relativa Migration

Ogni treno dovrà avere:
- Azienda
- Stazione di partenza
- Stazione di arrivo
- Orario di partenza
- Orario di arrivo
- Codice Treno
- Numero Carrozze
- In orario
- Cancellato

È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto ;)

Inserite inizialmente i dati tramite PhpMyAdmin. <br>
Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.

## Bonus
Create una seconda migration per aggiungere/modificare una colonna della tabella

<br><br>

# Esercizio: Laravel: Migration & Seeder (21/03/2024)
stesso nome repo: `laravel-migration-seeder`

Oggi proseguiamo con l'esercizio di ieri Train Station, sempre nella stessa repo: laravel-migration-seeder.

Aggiungiamo un seeder per la classe Train usando FakerPHP.

## BONUS 1
Implementare il seeder tramite un file csv.

## BONUS 2
Implementare la paginazione dei risultati.
Per formattare correttamente i links:
1. importare la classe Paginator con use Illuminate\Pagination\Paginator; nel file app\Providers\AppServiceProvider.php
2. aggiungere la riga Paginator::useBootstrap(); nel metodo boot()

<b>PS.</b> Ho aggiornato la repo template con il downgrade a Laravel 9.2. <br>
La versione corretta del pacchetto doctrine\dbal è già nel composer.json e non c'è bisogno di aggiungerlo. 
