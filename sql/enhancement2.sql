 -- Query 1
 INSERT INTO clients(
    clientFirstname,
    clientLastname,
    clientEmail,
    clientPassword,
    COMMENT
)
VALUES(
    "Tony",
    "Stark",
    "tony@starkent.com",
    "Iam1ronM@n",
    "I am the real Ironman"
);

-- Query 2
UPDATE
    clients
SET
    clientLevel = 3
WHERE
    clientLevel = 1;

-- Query 3
UPDATE
    inventory
SET
    invdescription =
REPLACE
    (
        "small interiors",
        "small",
        "spacious"
    )
WHERE
    invmake = "GM";

--Query 4
SELECT
    invmodel,
    classificationName
FROM
    inventory
INNER JOIN carclassification WHERE classificationName = "SUV";

--Query 5
DELETE FROM inventory WHERE invmodel = "Wrangler";
DELETE FROM inventory WHERE invmake = "jeep";

--Query 6
UPDATE inventory SET invImage = "/phpmotors/invImage", invThumbnail = "/phpmotors/invThumbnail";