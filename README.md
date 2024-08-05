Porównywarka Cen Miszkań

========================

Technologie i wymagania:
	client:
		Angular: 17.0.2
		TypeScript: 5.2.2
		Apex Charts: 1.10.0
		rxjs: 7.8.0
		bootstrap: 5.3.3
	server:
		Laravel Framework: 10.48.11
		league/csv: 9.16
		composer: 2.7.2
		PHP: 8.2.12
	inne:
		xampp: 3.3.0
		nodejs: 20.14.0
		npm: 10.7.0
		
========================

Opis projektu:

Aplikacja na zestawienie cen mieszkań w miastach polski w porównaniu do referencyjnych
stóp procentowych. Dane są zebrane w kwartały od III kwartału 2006 do IV kwartału 2023.
Serwis umożliwia pobranie zestawienia wszystkich miast w wybranego okresu w formatach json i xml

Użytkownik może znaleźć następujące dane:
* Możliwość znalezienia cen mieszkań z podziałem na rynek pierwotny i wtórny
* Możliwość wyboru cen transakcyjnych i ofertowych
* Ceny mieszkań 17 największych miast w Polsce
* Uśrednione ceny mieszkań z największych: 10, 9, 7, 6(bez Warszawy) miast w danym kwartale
* Zestawienie cen mieszkań w formacie json i xml
* Dane stóp procenowych w Polesce
* Możliwość porównania cen miszkań w dwóch miastach na raz

========================

Włączanie projektu

1. Włączy klienta XAMPP

2. Uruchomić plik run_server.bat lub run_server.sh w zależności od systemu

3. Jeżeli pusta baza danych nie została utworzona wcześniej nalezy podczas
   uruchamiania skryptu wcisnąć y

4. Uruchomić plik run_client.bat lub run_client.sh w zależności od systemu

5. W przeglądarce wpisać http://localhost:4200

6. !!! Aby pobrać dane należy zarejestrować klienta i być zalogowanym !!! 
   (hasło dłuższe od 8 znaków, poprawny format email)
   (automatyczne logowanie po rejestracji)
   
7. Można przetestować działanie aplikacji

========================

Źródła danych:

ceny ofertowe i transakcyjne mieszkań na rynku pierwotnym i wtórym 
Narodowy Bank Polski
https://nbp.pl/publikacje/cykliczne-materialy-analityczne-nbp/rynek-nieruchomosci/informacja-kwartalna/

Wysokość stóp procentowych
Narodowy Bank Polski
https://nbp.pl/podstawowe-stopy-procentowe-archiwum/

