# Usa una imagen base con PHP y Apache
FROM php:7.4-apache

# Establece el directorio de trabajo en el directorio de la aplicación
# Establece el directorio de trabajo en /app
WORKDIR /app

# Copia el archivo de requisitos al contenedor
COPY requirements.txt .

# Instala las dependencias de PHP que puedas necesitar
RUN apt-get update && \
    apt-get install -y \
    # Agrega cualquier otra dependencia que necesites aquí \
    && rm -rf /var/lib/apt/lists/*

# Exponer el puerto 80 para que el servidor web de Apache pueda ser accesible
COPY . /app

# Expone el puerto 2016
EXPOSE 2014

# Comando para iniciar el servidor web de Apache
CMD ["apache2-foreground", "0.0.0.0:2014"]
  

