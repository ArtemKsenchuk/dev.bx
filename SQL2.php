
#1ый запрос
SELECT
	NAME,
	COUNT(DISTINCT BOOK_ID) as amountOfBooks
FROM author_book
	     INNER JOIN author on author_book.AUTHOR_ID = author.ID
GROUP BY author.NAME;
#1ый запрос

#2ой запрос
SELECT
	a.NAME,
	s.CITY,
	SUM(QUANTITY)
FROM book_store bs
	     INNER JOIN author_book ab on bs.BOOK_ID = ab.BOOK_ID
	     INNER JOIN store s on bs.STORE_ID = s.ID
	     INNER JOIN author a on ab.AUTHOR_ID = a.ID
GROUP BY  a.NAME, s.CITY;
#2ой запрос

#3ий запрос

SELECT
	b.NAME,
	AVG(PRICE)
FROM book_store
	     INNER JOIN book b on book_store.BOOK_ID = b.ID
	     INNER JOIN publisher p on b.PUBLISHER_ID = p.ID
WHERE p.ID = 3
GROUP BY b.NAME;

#3ий запрос

#4ый запрос

SELECT
	s.CITY,
	b.NAME,
	AVG(PRICE)
FROM book_store
	     INNER JOIN book b on book_store.BOOK_ID = b.ID
	     INNER JOIN publisher p on b.PUBLISHER_ID = p.ID
	     INNER JOIN store s on book_store.STORE_ID = s.ID
WHERE p.ID = 3
GROUP BY s.CITY, b.NAME;

#4ый запрос

#5ый запрос

SELECT b.NAME,
sum(IF(store_id = 1, QUANTITY, 0)) AS QUAN_KLD,
sum(IF(store_id = 2, QUANTITY, 0)) AS QUAN_CHK,
sum(IF(store_id = 1, QUANTITY, 0)) - sum(IF (store_id = 2, QUANTITY, 0)) AS DIFF
FROM book_store bs
INNER JOIN book b on bs.BOOK_ID = b.ID
GROUP BY b.NAME;

#5ый запрос
