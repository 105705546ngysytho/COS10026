USE exhibition_db;
-- 1. Show every column and car.
SELECT * FROM cars;
-- 2. Show make, model and price sorted by make then model.
SELECT make, model, price FROM cars ORDER BY make, model;
-- 3. Cars costing at least $20,000 (4 sample cars).
SELECT make, model FROM cars WHERE price >= 20000;
-- 4. Average price for each make (Holden: $21,000).
SELECT make, AVG(price) FROM cars GROUP BY make;
-- 5. Price strictly between $10,000 and $15,000 (Astra).
SELECT make, model FROM cars WHERE price < 15000 AND price > 10000;
