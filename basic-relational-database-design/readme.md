# Basic Relational Database Design

## Database Design
The process of producing a Database Model that contains a detailed description of the Logical and Physical design choices that can be used to create a database.

## Relationships
1. One-to-one relationship - A record has 0 or 1 relation with another record in another table.
2. One-to-many relationship - A record in a table (A) has many linked records in another table (B). Each record in table (B) can have only one corresponsing record in table (A).
3. Many-to-many relationship - A record in a table (A) has many linked records in another table (B). Each record in table (B) can have one or more records in table (A).

## Normalization Forms
Normal form is a technique used to organize data efficiently in a database.
- Avoid data redundancy
- Ensure that data is logically stored

### Fisrt Normal Form (1NF)
- Only atomic values. No multiple values in a column.
- No repeating groups. Same repeating values in multiple rows.
- Must have primary key for each table.

### Second Normal Form (2NF)
- Must be 1NF.
- No partial dependency (referring partial composite keys as reference).

### Third Normal Form (3NF)
- Must be 2NF.
- All non-primary key fields are dependent on the primary key. No transitive dependency (non-primary key is dependent on non-primary key).

Reference: 
https://www.udemy.com/course/basic-relational-database-design/learn/lecture/13201950