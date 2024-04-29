CREATE DATABASE AccHolder;

  use AccHolder;
 CREATE TABLE users (
 username VARCHAR(30) NOT NULL,
 password VARCHAR(30) NOT NULL
 );
 
 use AccHolder;
 CREATE TABLE account (
 id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 firstname VARCHAR(30) NOT NULL,
 lastname VARCHAR(30) NOT NULL,
 email VARCHAR(50) NOT NULL,
 age INT(3),
 location VARCHAR(50),
 date TIMESTAMP
 );

 use AccHolder;
  CREATE TABLE sale (
 productID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 productName VARCHAR(100) NOT NULL,
 price VARCHAR(30) NOT NULL,
 about VARCHAR(500) NOT NULL,
 date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
 );

  INSERT INTO sale 
 VALUES 
 (987, "Dermalogica PreCleanse", 40, "Melts away make up. Can be used ON ALL skin types"),
 (789, "Dermalogica Special cleansing gel", 50, "Gel to foam cleanser. Can be used ON ALL skin types"),
 (456, "Obagi ClearFX", 80, "Hydroquinone supresses hyperpigmentation in the skin by slowing down the release of melanin and brightening skin tone. Used on melasma or hyperpigmentation"),
 (321, "Obagi Retinol 1%", 90, "Derivitave of Vitamin A, Retinol speeds up the skin renewal process. Used on ageing or hyperpigmented skin"),
 (123, "Image VitalC Serum", 75, "For best results, use in conjunction with retinol. Brightens skin"),
 (654, "Image Ageless Cleanser", 40, "Used on ageing skin. Glycolic acid will help to gently exfoliate."),
 (546, "Image Bundle", 100, "Great value bundle"),
 (874, "Dermalogica Trio", 100, "Great value bundle"),
 (559, "Obagi Bundle", 150, "Great value bundle");