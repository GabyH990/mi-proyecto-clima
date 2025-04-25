<?php
header('Content-Type: application/json');

$ciudad = $_GET['ciudad'] ?? 'Buenos Aires';
$ciudad = strtolower($ciudad);

switch ($ciudad) {
    case 'cordoba':
        $data = [
            "name" => "Córdoba",
            "sys" => ["country" => "AR"],
            "weather" => [["description" => "soleado"]],
            "main" => [
                "temp" => 29.3,
                "feels_like" => 31.0,
                "humidity" => 40,
                "pressure" => 1009
            ],
            "wind" => ["speed" => 15.2],
            "forecast" => [
                ["day" => "Lunes", "max" => 30, "min" => 17, "icon" => "sunny"],
                ["day" => "Martes", "max" => 28, "min" => 16, "icon" => "cloudy"],
                ["day" => "Miércoles", "max" => 27, "min" => 15, "icon" => "rainy"],
                ["day" => "Jueves", "max" => 26, "min" => 14, "icon" => "rainy"],
                ["day" => "Viernes", "max" => 29, "min" => 18, "icon" => "sunny"]
            ],
            "alerts" => [
                [
                    "type" => "warning",
                    "title" => "Alerta por altas temperaturas",
                    "message" => "Se esperan temperaturas superiores a 35°C durante la siesta.",
                    "source" => "Defensa Civil Córdoba",
                    "time" => "1 hora atrás"
                ]
            ]
        ];
        break;

    case 'rosario':
        $data = [
            "name" => "Rosario",
            "sys" => ["country" => "AR"],
            "weather" => [["description" => "lluvias dispersas"]],
            "main" => [
                "temp" => 21.8,
                "feels_like" => 22.4,
                "humidity" => 72,
                "pressure" => 1015
            ],
            "wind" => ["speed" => 10.3],
            "forecast" => [
                ["day" => "Lunes", "max" => 24, "min" => 16, "icon" => "rainy"],
                ["day" => "Martes", "max" => 22, "min" => 15, "icon" => "rainy"],
                ["day" => "Miércoles", "max" => 23, "min" => 16, "icon" => "cloudy"],
                ["day" => "Jueves", "max" => 26, "min" => 17, "icon" => "sunny"],
                ["day" => "Viernes", "max" => 27, "min" => 18, "icon" => "sunny"]
            ],
            "alerts" => []
        ];
        break;

    default:
        $data = [
            "name" => "Buenos Aires",
            "sys" => ["country" => "AR"],
            "weather" => [["description" => "nublado"]],
            "main" => [
                "temp" => 24.7,
                "feels_like" => 26.1,
                "humidity" => 68,
                "pressure" => 1013
            ],
            "wind" => ["speed" => 11.5],
            "forecast" => [
                ["day" => "Lunes", "max" => 28, "min" => 18, "icon" => "cloudy"],
                ["day" => "Martes", "max" => 26, "min" => 17, "icon" => "cloudy"],
                ["day" => "Miércoles", "max" => 22, "min" => 15, "icon" => "rainy"],
                ["day" => "Jueves", "max" => 21, "min" => 14, "icon" => "rainy"],
                ["day" => "Viernes", "max" => 24, "min" => 16, "icon" => "cloudy"]
            ],
            "alerts" => [
                [
                    "type" => "warning",
                    "title" => "Alerta por lluvias intensas",
                    "message" => "Se esperan entre 30 y 50 mm en las próximas 24h.",
                    "source" => "Servicio Meteorológico Nacional",
                    "time" => "2 horas atrás"
                ]
            ]
        ];
        break;
}

echo json_encode($data);