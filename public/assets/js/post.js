// fetchPosts.js
document.addEventListener('DOMContentLoaded', () => {
    const userId = 1; 
    const postApiUrl = `http://127.0.0.1:8000/api/v1/posts/${userId}`; 

    fetch(postApiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('Post fetch error: ' + response.statusText);
            }
            return response.json();
        })
        .then(postData => {
            const postContainer = document.getElementById('posts-container');
            if (postContainer) {
                const post = postData.data; 

                if (post) {
                    const postHTML = `
                        <div class="post-container">
                            <div class="post-header">
                                <div class="user-info">
                                    <img src="${post.poster.imageUrl || './assets/avatar.png'}" alt="Avatar" class="user-avatar">
                                    <div>
                                        <div class="user-name" id="name">${post.poster.name || 'Unknown'}</div>
                                        <div class="user-location" id="email">${post.poster.email || 'Unknown'}</div>
                                    </div>
                                </div>
                                <img src="{{ asset('images/icon/gach.png') }}" width="20">
                            </div>

                            <img src="{{ asset('images/icon/postimage.png') }}" alt="Post Image" class="post-image">

                            <div class="post-actions">
                                <div class="icons">
                                    <img src="{{ asset('images/icon/like.png') }}" alt="Like">
                                    <img src="{{ asset('images/icon/comment.png') }}" alt="comment">
                                    <img src="{{ asset('images/icon/share.png') }}" alt="shared">
                                </div>
                                <img src="{{ asset('images/icon/save.png') }}" alt="save">
                            </div>

                            <div class="post-caption">
                              <span>${post.poster.name || 'Unknown'}</span> ${post.content || ''}
                            </div>
                        </div>
                        </div>
                    `;
                    postContainer.innerHTML = postHTML;
                } else {
                    postContainer.innerHTML = `<div>No posts available for this user.</div>`;
                }
            }
        })
        .catch(error => {
            console.error('Error loading posts:', error);
        });
});