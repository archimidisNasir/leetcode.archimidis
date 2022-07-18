
// Runtime: 405 ms
// Memory Usage: 0 B



# Write your MySQL query statement below

SELECT Person.firstName, Person.lastName, Address.city, Address.state
FROM Person
LEFT JOIN Address ON Address.personId=Person.personId;