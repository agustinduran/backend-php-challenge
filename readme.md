# Talently Challenge

## Autor

Agustín Emmanuel Durán

- GitHub: https://github.com/agustineduran
- LinkedIn: https://www.linkedin.com/in/agustineduran/

## Tabla de contenidos

- [Tecnología](#Tecnología)
- [Pre-requisitos](#Pre-requisitos)
- [Instalación](#Instalación)

## Tecnología

- Lenguaje de programación: PHP 7.4
- Testing package: Kahlan
- Containers: Docker, Docker-compose

## Pre-requisitos

- Docker and docker compose instalado.

## Instalación

### Cómo correr el challenge

Debes tener instalado docker en tu computadora para usar nuestros comandos del flujo de trabajo

- Usa el comando `./start` para inicializar el docker
- Usa el comando `./test` para correr los tests
- Usa el comando `./finish` para desactivar el docker

# Preguntas de conocimiento en Laravel

1. Qué paquete o estrategia utilizarías para levantar un sistema de administración rápidamente? (Autenticación y CRUDs)

    Cuando me tocaba programar en Symfony utilizaba el Security Bundle; y por lo que he estado investigando, para el framework Laravel, utilizaría [Breeze](https://laravel.com/docs/9.x/starter-kits#breeze-and-blade) que es el que más se asemeja; En segunda instancia otro que me gustó mucho fue [JetStream](https://jetstream.laravel.com/2.x/introduction.html).

2. Una breve explicación de cómo laravel utiliza la injección de dependencias

    Laravel hace uso de un [Service Container (IOC)](https://laravel.com/docs/4.2/ioc#introduction). El Service Container nos proporciona las facilidades de la inyección de dependencias y principalmente cubre tareas como, crear objetos, determinar las dependencias de un objeto y crear dicho objeto con todas sus dependencias. Por lo tanto, evita que tengamos que instanciar las clases de manera tradicional.

3. En qué casos utilizarías un Query Scope?

    En los casos que se utilizaria Query Scope es cuando hay mas de una intervención en la misma consulta, entonces, para evitar codigo repetitivo laravel ofrece dicho Query Scope.

4. Qué convenciones utilizas en la creación e implementación de migraciones?

    Para la creación de migraciones utilizaría, para empezar, la convención recomendada por Laravel, que es la de utilizar la fecha de creación de la migración, junto con un id autoincremental, el tipo de consulta (CREATE/UPDATE), más la tabla a la que hace referencia; Utilizando nomenclatura snake case. Ejemplo: `2017_01_01_000000_create_articles_table`.
    Otra convención recomendada es que las migraciones cuando se trabajan con relaciones se definan en los modelos que se hagan dicha relacion (hasOne, belongsToMany).
    