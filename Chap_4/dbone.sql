-- albums table
CREATE TABLE albums (
    album_id INT PRIMARY KEY AUTO_INCREMENT,
    artist_id INT,
    album_name varchar(100)
    )

-- add index
    ALTER TABLE albums add index (artist_id)

--add values
    insert into artists (artist_name) values ("Bon Iver")
    insert into artists (artist_name) values ("Feist")
    INSERT INTO albums (artist_id, album_name) VALUES (1, "For Emma, Forever Ago"), (1, "Blood Bank - EP"), (2, "Let It Die"), (2, "The Reminder")

-- select
SELECT album_name
FROM albums

-- update
update albums set album_name = "Let It Die(2005)" where album_name = "Let It Die"

-- join
select artist_name, album_name
from artists
inner join albums
on artists.artist_id = albums.artist_id
where artist_id = 1

