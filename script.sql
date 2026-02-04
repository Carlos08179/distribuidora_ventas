CREATE TABLE ventas (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre_grupo TEXT NOT NULL,
    nombre_producto TEXT NOT NULL,
    fecha_alta TEXT NOT NULL,
    kilos REAL NOT NULL,
    nombre_vendedor TEXT NOT NULL,
    precio_kilo REAL NOT NULL,
    monto_total REAL NOT NULL
);