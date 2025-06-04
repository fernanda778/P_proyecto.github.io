const apiKey = "91ee337e64f6332a9a37d89bb5afe7cb"; // Reemplázalo con tu API key de OpenWeatherMap

function mostrarClima(lat, lon) {
  const url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&units=metric&lang=es&appid=${apiKey}`;

  fetch(url)
    .then(res => res.json())
    .then(data => {
      if (data.cod !== 200) {
        throw new Error("No se pudo obtener el clima.");
      }

      const temp = Math.round(data.main.temp);
      const ciudad = data.name;
      const descripcion = data.weather[0].description;
      const icono = data.weather[0].icon;
      
      document.getElementById("weather").innerHTML = `
        <img src="https://openweathermap.org/img/wn/${icono}@2x.png" alt="Icono del clima" />
        <p><strong>${temp}°C</strong> en <strong>${ciudad}</strong></p>
        <p>${descripcion.charAt(0).toUpperCase() + descripcion.slice(1)}</p>
      `;
    })
    .catch(error => {
      document.getElementById("weather").innerHTML = `<p>❌ ${error.message}</p>`;
    });
}

if ("geolocation" in navigator) {
  navigator.geolocation.getCurrentPosition(
    position => {
      const lat = position.coords.latitude;
      const lon = position.coords.longitude;
      mostrarClima(lat, lon);
    },
    () => {
      document.getElementById("weather").innerHTML = "<p>📍 No se pudo acceder a tu ubicación.</p>";
    }
  );
} else {
  document.getElementById("weather").innerHTML = "<p>❌ Geolocalización no soportada por tu navegador.</p>";
}