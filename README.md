# CineSearch
![Movies](https://miro.medium.com/v2/resize:fit:1132/1*8y9sCjaxFmAzEiVEzw3YoQ.jpeg)
CineSearch is a program which can search for movies and display information about them

---
### Main Features:
- Search for movies on IMDb directly in the program
- Save movies in a watch list to retrieve them later

---
### Installation:
In order for the program to work correctly, install [Cinemagoer](https://github.com/cinemagoer/cinemagoer) with
````
pip install git+https://github.com/cinemagoer/cinemagoer
````
(the program was tested using Version 2023.10.22)

also install [Tkinter](https://docs.python.org/3/library/tkinter.html) with



---
### How to use:
Start the program. The main page features multiple buttons
- Actor: Starts the search for an actor
- Movie: Starts the search for a movie
- Watchlist: Opens a new window for the watchlist

Search:
To start the search for a movie/actor, press the corresponding button, type your request and confirm it to start the search. 
If you search for an actor, the program will show you the 5 latest movies the actor is playing in. Clicking on one of the movies will copy the movieID so it can be used in the watchlist. If you search for a movie instead, the movieID will always automatically be copied to the clipboard. 

Watchlist:
To open the watchlist, click the "Watchlist" button on the main page.
A separate window will open with multiple buttons:
- Exit: This closes the watchlist window and go back to the main page
- Create Watchlist: This creates a new watchlist
- Update Watchlist: This updates the watchlist and shows it. To see the current watchlist items, you always have to press the update button first.
- Delete watchlist: This deletes the current watchlist and all items on it. 

To enter a new movie to the watchlist, paste the movieID into the entry field and confirm with the button below it. Make sure that a watchlist has been created first or the movie won't be saved. The program will automatically create a new watchlist if you enter a movie without creating one first, but the movie still won't be saved on it. To see the contents of the watchlist, press the update watchlist button. To delete the watchlist, press the delete watchlist button.

It is normal that the program loads for a few seconds because it is fetching data from the IMDb servers.

---
### Used Packages and data-sources:
[IMDb](https://www.imdb.com/)
[Cinemagoer](https://github.com/cinemagoer/cinemagoer)
[Tkinter](https://docs.python.org/3/library/tkinter.html)
[SQLite](https://www.sqlite.org/)
