CREATE TABLE admin (
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL    
) ENGINE = InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE posts (
    post_id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    post_title VARCHAR(255) NOT NULL,
    post_date DATE NOT NULL,
    post_author VARCHAR(100) NOT NULL,
    post_image TEXT NOT NULL,
    post_keywords TEXT NOT NULL,
    post_content TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;