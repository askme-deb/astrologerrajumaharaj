// Plain JavaScript: Fetch and render astrologers with skeleton loader
// This script will fill #astrologers-app with astrologer cards from the API

document.addEventListener('DOMContentLoaded', function () {
    var app = document.getElementById('astrologers-app');
    if (!app) return;

    // Skeleton loader HTML
    function getSkeletonLoader() {
        let skeleton = '';
        for (let n = 0; n < 3; n++) {
            skeleton += `
            <div class="banner-item">
                <div class="astro-card">
                    <div class="astro-image skeleton-loader" style="height:120px;width:120px;background:#eee;border-radius:50%;margin:auto;"></div>
                    <div class="astro-info">
                        <div class="skeleton-loader" style="height:24px;width:60%;margin:10px auto;"></div>
                        <div class="skeleton-loader" style="height:16px;width:40%;margin:10px auto;"></div>
                        <div class="skeleton-loader" style="height:16px;width:50%;margin:10px auto;"></div>
                        <div class="astro-actions">
                            <div class="skeleton-loader" style="height:32px;width:120px;margin:10px auto;"></div>
                        </div>
                        <div class="skeleton-loader" style="height:16px;width:80px;margin:10px auto;"></div>
                    </div>
                </div>
            </div>
            `;
        }
        return `<div class="owl-carousel owl-theme">${skeleton}</div>`;
    }

    // Render astrologers
    function renderAstrologers(astrologers) {
        let html = '<div class="owl-carousel owl-theme">';
        astrologers.forEach(function(astro) {
            html += `
            <div class="banner-item">
                <div class="astro-card">
                    <div class="astro-image">
                        <img src="${astro.image_url || '/assets/images/top 1 astrologer.png'}" alt="${astro.name}">
                    </div>
                    <div class="astro-info">
                        <h3>${astro.name}</h3>
                        <p class="skills">${Array.isArray(astro.skills) ? astro.skills.join(', ') : ''}</p>
                        <p class="language">${Array.isArray(astro.languages) ? astro.languages.join(', ') : ''}</p>
                        <div class="astro-actions">
                            <button class="btn-call">Get an Appointment</button>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i> ${astro.rating !== null ? astro.rating : 'N/A'} | ${astro.reviews_count !== null ? astro.reviews_count : 'N/A'} reviews
                        </div>
                    </div>
                </div>
            </div>
            `;
        });
        html += '</div>';
        return html;
    }

    // Show skeleton loader
    app.innerHTML = getSkeletonLoader();

    // Fetch astrologers
    fetch('https://astro.flexcellents.com/api/v1/astrologers')
        .then(res => res.json())
        .then(data => {
            let astrologers = Array.isArray(data.data) ? data.data : [];
            app.innerHTML = renderAstrologers(astrologers);
        })
        .catch(() => {
            app.innerHTML = '<div class="text-danger">Failed to load astrologers.</div>';
        });
});
