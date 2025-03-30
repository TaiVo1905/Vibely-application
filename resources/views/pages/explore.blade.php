@extends('layouts.MasterLayout')

@section('content')
<div class="explore-container">
    <div class="explore-header">
        <div class="filter-group">
            <button class="filter-btn active">Couple</button>
            <button class="filter-btn">Friends</button>
            <button class="filter-btn">Food</button>
            <button class="filter-btn">Camps</button>
            <button class="filter-btn">Resorts</button>
            <div class="search-box">
                <input type="text" placeholder="Explore more with search">
            </div>
        </div>
    </div>

    <div class="explore-grid">
        <div class="grid-item">
            <div class="save-badge">
                <i class="fas fa-bookmark"></i>
            </div>
            <img src="https://images.unsplash.com/photo-1499793983690-e29da59ef1c2?auto=format&fit=crop&w=800" alt="Couple Maldives">
            <div class="stats-overlay">
                <div class="stats">
                    <div class="stat-item">
                        <i class="fas fa-eye"></i>
                        <span>1.2m</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-heart"></i>
                        <span>233k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-comment"></i>
                        <span>54k</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="save-badge">
                <i class="fas fa-bookmark"></i>
            </div>
            <img src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?auto=format&fit=crop&w=800" alt="Friends Mountain">
            <div class="stats-overlay">
                <div class="stats">
                    <div class="stat-item">
                        <i class="fas fa-eye"></i>
                        <span>856k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-heart"></i>
                        <span>156k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-comment"></i>
                        <span>32k</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item large">
            <img src="https://images.unsplash.com/photo-1515542622106-78bda8ba0e5b?auto=format&fit=crop&w=800" alt="Family Colosseum">
            <div class="stats-overlay">
                <p>Here is to a vacation of no regrets!</p>
                <div class="stats">
                    <div class="stat-item">
                        <i class="fas fa-eye"></i>
                        <span>1.2m</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-heart"></i>
                        <span>233k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-comment"></i>
                        <span>54k</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="save-badge">
                <i class="fas fa-bookmark"></i>
            </div>
            <img src="https://images.unsplash.com/photo-1539635278303-d4002c07eae3?auto=format&fit=crop&w=800" alt="Friends Happy">
            <div class="stats-overlay">
                <div class="stats">
                    <div class="stat-item">
                        <i class="fas fa-eye"></i>
                        <span>654k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-heart"></i>
                        <span>145k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-comment"></i>
                        <span>28k</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <img src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?auto=format&fit=crop&w=800" alt="Road">
            <div class="stats-overlay">
                <div class="stats">
                    <div class="stat-item">
                        <i class="fas fa-eye"></i>
                        <span>432k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-heart"></i>
                        <span>98k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-comment"></i>
                        <span>21k</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item wide">
            <div class="save-badge">
                <i class="fas fa-bookmark"></i>
            </div>
            <img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=800" alt="Resort Pool">
            <div class="stats-overlay">
                <div class="stats">
                    <div class="stat-item">
                        <i class="fas fa-eye"></i>
                        <span>987k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-heart"></i>
                        <span>234k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-comment"></i>
                        <span>45k</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=800" alt="Food">
            <div class="stats-overlay">
                <div class="stats">
                    <div class="stat-item">
                        <i class="fas fa-eye"></i>
                        <span>765k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-heart"></i>
                        <span>187k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-comment"></i>
                        <span>34k</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="save-badge">
                <i class="fas fa-bookmark"></i>
            </div>
            <img src="https://images.unsplash.com/photo-1516483638261-f4dbaf036963?auto=format&fit=crop&w=800" alt="Couple Italy">
            <div class="stats-overlay">
                <div class="stats">
                    <div class="stat-item">
                        <i class="fas fa-eye"></i>
                        <span>876k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-heart"></i>
                        <span>198k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-comment"></i>
                        <span>43k</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="save-badge">
                <i class="fas fa-bookmark"></i>
            </div>
            <img src="https://images.unsplash.com/photo-1534256958597-7fe685cbd745?auto=format&fit=crop&w=800" alt="Seafood">
            <div class="stats-overlay">
                <div class="stats">
                    <div class="stat-item">
                        <i class="fas fa-eye"></i>
                        <span>654k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-heart"></i>
                        <span>145k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-comment"></i>
                        <span>32k</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="save-badge">
                <i class="fas fa-bookmark"></i>
            </div>
            <img src="https://images.unsplash.com/photo-1534256958597-7fe685cbd745?auto=format&fit=crop&w=800" alt="Seafood">
            <div class="stats-overlay">
                <div class="stats">
                    <div class="stat-item">
                        <i class="fas fa-eye"></i>
                        <span>543k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-heart"></i>
                        <span>123k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-comment"></i>
                        <span>28k</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="save-badge">
                <i class="fas fa-bookmark"></i>
            </div>
            <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?auto=format&fit=crop&w=800" alt="Mountain Camping">
            <div class="stats-overlay">
                <div class="stats">
                    <div class="stat-item">
                        <i class="fas fa-eye"></i>
                        <span>432k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-heart"></i>
                        <span>98k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-comment"></i>
                        <span>21k</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="save-badge">
                <i class="fas fa-bookmark"></i>
            </div>
            <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?auto=format&fit=crop&w=800" alt="Beach Resort">
            <div class="stats-overlay">
                <div class="stats">
                    <div class="stat-item">
                        <i class="fas fa-eye"></i>
                        <span>765k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-heart"></i>
                        <span>167k</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-comment"></i>
                        <span>36k</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
@parent
<link rel="stylesheet" href="{{ asset('assets/Css/explore.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
@endsection