
*Choose all movies
SELECT * FROM film 


*Choose all the actors of the movie you added
SELECT film_id=1 FROM actors

*Choose all the reviews of the movie you added
SELECT * FROM reviews


*Add a review
INSERT INTO reviews ('id', 'name', 'rate', 'date', 'text') VALUES ('3', 'user3', '7', '2023-01-20 09:45:23', 'super well done');


*Update the title of the movie you added
UPDATE film SET titel="Spider man: Homecoming" WHERE titel="Spider-Man_Homecoming"


*Remove an actor from the movie you added
DELETE FROM actors WHERE id=4;


*Harder: Calculate average score of all reviews of the movie you added
SELECT AVG(rate)
FROM reviews










