CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    phone_number VARCHAR(11) UNIQUE,
    email VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE posts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    poster_id INT NOT NULL,
    content TEXT NOT NULL,
    status ENUM('public', 'private') DEFAULT 'public',
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (poster_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE posts_image (
    id INT PRIMARY KEY AUTO_INCREMENT,
    post_id INT NOT NULL,
    link VARCHAR(255) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE
);

CREATE TABLE comments (
    id INT PRIMARY KEY AUTO_INCREMENT,
    post_id INT NOT NULL,
    commenter_id INT NOT NULL,
    content TEXT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE,
    FOREIGN KEY (commenter_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE replies (
    id INT PRIMARY KEY AUTO_INCREMENT,
    comment_id INT NOT NULL,
    replier_id INT NOT NULL,
    content TEXT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (comment_id) REFERENCES comments(id) ON DELETE CASCADE,
    FOREIGN KEY (replier_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE messages (
    id INT PRIMARY KEY AUTO_INCREMENT,
    sender_id INT NOT NULL,
    receiver_id INT NOT NULL,
    content TEXT NOT NULL,
    status ENUM('sent', 'delivered', 'read') DEFAULT 'sent',
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (sender_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (receiver_id) REFERENCES users(id) ON DELETE CASCADE
);


CREATE TABLE likes (
    id INT NOT NULL,
    user_like_id INT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id, user_like_id),
    FOREIGN KEY (id) REFERENCES posts(id) ON DELETE CASCADE,
    FOREIGN KEY (user_like_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE shares (
    post_id INT NOT NULL,
    user_share_id INT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (post_id, user_share_id),
    FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE,
    FOREIGN KEY (user_share_id) REFERENCES users(id) ON DELETE CASCADE
);

-- INSERT mẫu data
INSERT INTO users (name, image_url, phone_number, email, password, timestamp)
VALUES
('Alice Nguyen', 'https://surl.li/enpjnd', '0123456789', 'alice@example.com', 'alice123', '2025-03-01 10:00:00'),
('Bob Tran', 'https://surl.li/vfmfsv', '0987654321', 'bob@example.com', 'bob123', '2025-03-01 10:05:00'),
('Carol Pham', 'https://surl.li/ivypsy', '0123987654', 'carol@example.com', 'carol123', '2025-03-01 10:10:00'),
('David Le', 'https://surl.li/pbbqcv', '0932123456', 'david@example.com', 'david123', '2025-03-01 10:15:00'),
('Emma Hoang', 'https://surl.li/acreis', '0909123123', 'emma@example.com', 'emma123', '2025-03-01 10:20:00'),
('Frank Vu', 'https://i.imgur.com/HajHVA5.jpeg', '0913456123', 'frank@example.com', 'frank123', '2025-03-01 10:25:00'),
('Grace Truong', 'https://i.imgur.com/k7h0AyG.jpeg', '0986123456', 'grace@example.com', 'grace123', '2025-03-01 10:30:00'),
('Henry Dao', 'https://i.imgur.com/V8RLRMe.jpeg', '0945678123', 'henry@example.com', 'henry123', '2025-03-01 10:35:00'),
('Ivy Nguyen', 'https://i.imgur.com/iJioLfA.jpeg', '0901234567', 'ivy@example.com', 'ivy123', '2025-03-01 10:40:00'),
('Jacky Vo', 'https://i.imgur.com/oje0DNN.jpeg', '0912345678', 'jacky@example.com', 'jacky123', '2025-03-01 10:45:00');

INSERT INTO posts (poster_id, content, status, timestamp) VALUES
(1, 'Good morning everyone!', 'public', '2025-03-01 10:00:00'),
(2, 'Coffee and work, perfect start!', 'public', '2025-03-01 10:15:00'),
(3, 'Coding till 2 AM...', 'private', '2025-03-01 10:30:00'),
(4, 'Exploring Da Nang today!', 'public', '2025-03-01 10:45:00'),
(5, 'Huge sale incoming! Stay tuned.', 'public', '2025-03-01 11:00:00');

INSERT INTO posts_image (post_id, link, timestamp) VALUES
(1, 'https://i.imgur.com/BEGEJ3L.jpeg', '2025-03-01 10:05:00'),
(2, 'https://i.imgur.com/IGI4ji3.jpeg', '2025-03-01 10:20:00'),
(3, 'https://i.imgur.com/IGI4ji3.jpeg', '2025-03-01 10:35:00'),
(4, 'https://i.imgur.com/YKHjt6N.jpeg', '2025-03-01 10:50:00'),
(5, 'https://i.imgur.com/EbihFLM.jpeg', '2025-03-01 11:05:00');

INSERT INTO replies (comment_id, replier_id, content, timestamp) VALUES
(1, 3, 'Thanks, Alice! You too!', '2025-03-01 10:15:00'),
(2, 4, 'Black coffee all the way!', '2025-03-01 10:30:00'),
(3, 5, 'Just fixing some bugs!', '2025-03-01 10:45:00');

INSERT INTO messages (sender_id, receiver_id, content, status, timestamp) VALUES
(1, 2, 'Hey, are you free?', 'sent', '2025-03-01 10:10:00'),
(2, 3, 'Any plans for lunch?', 'delivered', '2025-03-01 10:25:00'),
(3, 4, 'What are you up to today?', 'read', '2025-03-01 10:40:00');

INSERT INTO likes (id, user_like_id, timestamp) VALUES
(1, 2, '2025-03-01 10:06:00'),
(2, 3, '2025-03-01 10:21:00'),
(3, 4, '2025-03-01 10:36:00');

INSERT INTO shares (post_id, user_share_id, timestamp) VALUES
(1, 3, '2025-03-01 10:07:00'),
(2, 4, '2025-03-01 10:22:00'),
(3, 5, '2025-03-01 10:37:00');