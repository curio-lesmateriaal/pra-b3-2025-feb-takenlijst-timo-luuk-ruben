# B3 – Eisenpakket Sprint 1 & 2

## Sprint 1

### 1.1 Nieuwe taak aanmaken
- [ ] Map `tasks/` met `index.php` en `create.php`.
- [ ] Link van `index.php` naar `create.php`.
- [ ] Formulier in `create.php` (titel, beschrijving, afdeling).
- [ ] `tasksController.php` met `$action` en if-statements.
- [ ] INSERT-query in de controller.
- [ ] Inputvalidatie.
- [ ] Testen met verschillende input.

### 1.2 Takenoverzicht (status ≠ done)
- [ ] Overzicht tonen met titel, afdeling, status.
- [ ] Query met `status <> 'done'`.

### 1.5 Takenoverzicht (status = done)
- [ ] `tasks/done.php` met titel en H1.
- [ ] Link vanuit `tasks/index.php` en terug.
- [ ] Query: `SELECT * WHERE status = 'done'`.
- [ ] Foreach-lus voor weergave.

## Sprint 2

### 2.1 Deadline toevoegen
- [ ] Formulier aanpassen (`create.php`, `edit.php`).
- [ ] Validatie en opslaan in database.
- [ ] Overzichten aanpassen met sortering op deadline.

### 2.2 Taken filteren per afdeling
- [ ] Pagina `tasks/afdeling.php`.
- [ ] GET-parameter `afdeling` uitlezen.
- [ ] WHERE-filter in query.

### 2.3 Inloggen
- [ ] Loginpagina met formulier.
- [ ] `loginController.php` afhandelen.
- [ ] Sessie opslaan bij succesvol inloggen.
- [ ] Redirect naar homepage.

### 2.4 Pagina’s beveiligen
- [ ] Alleen toegankelijk voor ingelogde gebruikers.

### 2.5 User-ID opslaan bij taken
- [ ] `user-id` uit SESSION opslaan in `tasks`-tabel.

### 2.6 Taken per gebruiker
- [ ] `tasks/my.php` tonen taken van ingelogde gebruiker.
- [ ] WHERE-filter met `user-id` uit SESSION.
- [ ] Link van/tot overzicht.
