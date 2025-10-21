# Parking system

# What i've done with this simple Parking API:

- Create routes for API methods (GET: /parking-lot, POST: /parking-spot/{id}/park and POST: /parking-spot/{id}/unpark);
- Create Seeder to populete PARK entity;
- Create ENUM data structure (typed data flow for SLOT STATUS and VEHICLE TYPE);
- Usege of Strategy Design Patters (by creating Service Classes to provide dependency injection, avoiding buseness rules inside the Controllers);
- Unit Tests with PHPUnit;
- Containers (3 docker images: Laravel, Postgres and Cache);

# Some prints of API endpoints

- Park a Vehicle
<img src="https://thiagomota.work/prints/Captura%20de%20tela%202025-10-17%20192003.png" width="100%" />

- Unpark a Vehicle
<img src="https://thiagomota.work/prints/Captura%20de%20tela%202025-10-17%20192224.png" width="100%" />

- List all Slots
<img src="https://thiagomota.work/prints/image.png" width="100%" />

- Link to C4 Architectural model
https://miro.com/app/board/uXjVJ3A0jV4=/
