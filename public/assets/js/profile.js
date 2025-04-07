// fetchUser.js
document.addEventListener('DOMContentLoaded', () => {
    const userId = 1; 
    const userApiUrl = `http://127.0.0.1:8000/api/v1/users/${userId}`; 

    fetch(userApiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('User fetch error: ' + response.statusText);
            }
            return response.json();
        })
        .then(userData => {
            const avatarElement = document.getElementById('avatar-image');
            avatarElement.src = userData.data.imageUrl || 'path/to/default-avatar.jpg';

            document.getElementById('email').textContent = userData.data.email || 'No email provided';
            document.getElementById('name').textContent = userData.data.name || 'No name provided';
        })
        .catch(error => {
            console.error('Error loading user data:', error);
        });
});