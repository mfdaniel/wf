SELECT * FROM test.person_address;
 USE test;
ALTER TABLE address ADD CONSTRAINT FOREIGN KEY (townid) REFERENCES town(id);
