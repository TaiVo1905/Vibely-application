-- INSERT mẫu data
INSERT INTO users (name, image_url, phone_number, email, password, created_at)
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

INSERT INTO posts (poster_id, content, status, created_at) VALUES
(1, 'Good morning everyone!', 'public', '2025-03-01 10:00:00'),
(2, 'Coffee and work, perfect start!', 'public', '2025-03-01 10:15:00'),
(3, 'Coding till 2 AM...', 'private', '2025-03-01 10:30:00'),
(4, 'Exploring Da Nang today!', 'public', '2025-03-01 10:45:00'),
(5, 'Huge sale incoming! Stay tuned.', 'public', '2025-03-01 11:00:00');

INSERT INTO post_images (post_id, image_url, created_at) VALUES
(1, 'https://i.imgur.com/BEGEJ3L.jpeg', '2025-03-01 10:05:00'),
(2, 'https://i.imgur.com/IGI4ji3.jpeg', '2025-03-01 10:20:00'),
(3, 'https://i.imgur.com/IGI4ji3.jpeg', '2025-03-01 10:35:00'),
(4, 'https://i.imgur.com/YKHjt6N.jpeg', '2025-03-01 10:50:00'),
(5, 'https://i.imgur.com/EbihFLM.jpeg', '2025-03-01 11:05:00');

INSERT INTO messages (sender_id, receiver_id, content, status, created_at) VALUES
(1, 2, 'Hey, are you free?', 'sent', '2025-03-01 10:10:00'),
(2, 3, 'Any plans for lunch?', 'delivered', '2025-03-01 10:25:00'),
(3, 4, 'What are you up to today?', 'read', '2025-03-01 10:40:00');

INSERT INTO likes (post_id, user_like_id, created_at) VALUES
(1, 2, '2025-03-01 10:06:00'),
(2, 3, '2025-03-01 10:21:00'),
(3, 4, '2025-03-01 10:36:00');

INSERT INTO shares (post_id, user_share_id, created_at) VALUES
(1, 3, '2025-03-01 10:07:00'),
(2, 4, '2025-03-01 10:22:00'),
(3, 5, '2025-03-01 10:37:00');