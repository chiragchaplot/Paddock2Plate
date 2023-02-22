CREATE TABLE cowDetails (
  id INT PRIMARY KEY,
  cowid VARCHAR(255),
  cowname VARCHAR(255)
);

CREATE TABLE cowWeightRecords (
  id INT PRIMARY KEY,
  weight INT,
  daterecorded DATE
);

CREATE TABLE cowImages (
  id INT PRIMARY KEY,
  imageName VARCHAR(255),
  imageDate DATE
);

CREATE TABLE cowHealth (
  id INT PRIMARY KEY,
  immunisationDate DATE,
  isAlive BOOLEAN,
  dateOfDeath DATE NULL
);
