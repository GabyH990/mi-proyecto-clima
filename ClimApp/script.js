async function cargarClima(ciudad = 'Buenos Aires') {
    try {
        const response = await fetch(`datos.php?ciudad=${encodeURIComponent(ciudad)}`);
        const data = await response.json();

        document.getElementById("locationName").textContent = `${data.name}, ${data.sys.country}`;
        document.getElementById("weatherDescription").textContent = data.weather[0].description;
        document.getElementById("currentTemp").textContent = `${Math.round(data.main.temp)}°C`;
        document.getElementById("feelsLike").textContent = `${Math.round(data.main.feels_like)}°C`;
        document.getElementById("humidity").textContent = `${data.main.humidity}%`;
        document.getElementById("windSpeed").textContent = `${data.wind.speed} km/h`;
        document.getElementById("pressure").textContent = `${data.main.pressure} hPa`;
        document.getElementById("lastUpdate").textContent = `Actualizado: ${new Date().toLocaleTimeString()}`;

        renderForecast(data.forecast);
        renderAlerts(data.alerts);
    } catch (error) {
        alert("Error cargando el clima.");
    }
}

function renderForecast(forecast) {
    const container = document.getElementById("forecastContainer");
    container.innerHTML = "";
    forecast.forEach(day => {
        container.innerHTML += `
            <div class="forecast-card">
                <div>${day.day}</div>
                <div class="icon-${day.icon}">${getIcon(day.icon)}</div>
                <div>${day.max}° / ${day.min}°</div>
            </div>
        `;
    });
}

function renderAlerts(alerts) {
    const container = document.getElementById("alertsContainer");
    container.innerHTML = "";

    if (alerts.length === 0) {
        container.innerHTML = "<p>No hay alertas activas.</p>";
        return;
    }

    alerts.forEach(alert => {
        container.innerHTML += `
            <div class="alert-card">
                <strong>${alert.title}</strong>
                <p>${alert.message}</p>
                <small>${alert.source} • ${alert.time}</small>
            </div>
        `;
    });
}

function getIcon(type) {
    const icons = {
        sunny: "☀️",
        cloudy: "☁️",
        rainy: "🌧️",
        stormy: "⛈️"
    };
    return icons[type] || "🌤️";
}

document.getElementById("refreshButton").addEventListener("click", () => {
    cargarClima();
});

cargarClima();