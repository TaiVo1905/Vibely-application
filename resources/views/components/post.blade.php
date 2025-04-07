<!DOCTYPE html>
<html>
<head>
    <title>Bài đăng</title>
    <link rel="stylesheet" href="{{asset('assets/css/post.css')}}">
    </head>
<body>
    <h2 style="text-align: center;">Danh sách bài đăng</h2>

    <div id="posts-container"></div>

    <script>
        const postContainer = document.getElementById('posts-container');
        const postUrl = 'http://127.0.0.1:8000/api/v1/posts';

        fetch(postUrl)
          .then(res => res.json())
          .then(data => {
              console.log(data); // Đây là object
              const posts = data.data; 

              let htmlArray = [];
                console.log(posts[0].postImages[0].imageUrl)
              posts.map(post => {
                  htmlArray.push(`
                      <div class="posts-container">
                          <div class="post-header">
                              <div class="user-info">
                                  <img src="${post.poster.imageUrl || './assets/avatar.png'}" alt="Avatar" class="user-avatar">
                                  <div>
                                      <div class="user-name">${post.poster.name || 'Unknown'}</div>
                                  </div>
                              </div>
                              <img src="{{asset('images/icon/gach.png')}}" width="20">
                          </div>

            <img src='{{asset('images/icon/postimage.png')}}' alt="Post Image" class="post-image">

                          <div class="post-actions">  
                              <div class="icons">
                                  <img src="{{asset('images/icon/like.png')}}" alt="Like">
                                  <img src="{{asset('images/icon/comment.png')}}" alt="Comment" class="comment-toggle-btn">
                                  <img src="{{asset('images/icon/share.png')}}" alt="Share">
                              </div>
                              <img src="{{asset('images/icon/save.png')}}" alt="Save">
                          </div>

                          <div class="post-caption">
                              <span>${post.poster.name || 'Unknown'}</span> ${post.content || ''}
                          </div>

                           <!-- Phần bình luận -->
                          <div class="comment-section" style="display: none;">
                              <div class="comment-box">
                                  <strong>Lan:</strong> Đẹp thật đó!
                              </div>
                              <div class="comment-box">
                                  <strong>Huy:</strong> Hôm nào đi chơi nha
                              </div>
                              <div class="comment-box">
                                  <strong>Ngọc:</strong> Cảm ơn vì bài viết này!
                              </div>

                              <!-- Form nhập bình luận -->
                              <div class="comment-form">
                                  <textarea placeholder="Comment ..."></textarea>
                                  <button type="submit">Submit</button>
                              </div>
                          </div>
                      </div>
                  `);
              });

              postContainer.innerHTML = htmlArray.join('');
          })
          .catch(error => {
              console.error('Error loading posts:', error);
          });

        document.addEventListener('click', function (e) {
            if (e.target && e.target.classList.contains('comment-toggle-btn')) {
                const commentSection = e.target.closest('.posts-container').querySelector('.comment-section');
                commentSection.style.display = (commentSection.style.display === 'none' || commentSection.style.display === '') ? 'block' : 'none';
            }
        });
    </script>
</body>
</html>
