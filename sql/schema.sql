CREATE TABLE franchisees (
    franchisee_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    gender VARCHAR(20),
    contact_number VARCHAR(50),
    email VARCHAR(100),
    date_joined TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE branches (
    branch_id INT AUTO_INCREMENT PRIMARY KEY,
    branch_name VARCHAR(150),
    location VARCHAR(150),
    franchisee_id INT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_franchisee FOREIGN KEY (franchisee_id) REFERENCES franchisees(franchisee_id) ON DELETE CASCADE
);
