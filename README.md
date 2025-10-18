# Parking system

# What i've done in 60 minutes challenge:

- Create routes for API methods (GET: /parking-lot, POST: /parking-spot/{id}/park and POST: /parking-spot/{id}/unpark);
- Create Seeder to populete PARK entity;
- Create ENUM data structure (typed data flow for SLOT STATUS and VEHICLE TYPE);
- Usege of Strategy Design Patters (by creating Service Classes to provide dependency injection, avoiding buseness rules inside the Controllers)
- Tried to follow as must business rules as i could;

# What i wish i had done if i had more than 60 min to finish challenge:

- Create unit tests (i do really think that it is one of the best practices for a high quality application);
- Create relationship between VEHICLE and USER entities;
- Create a route for calculete time of parking and use it to alert user when time of parking was about to up;
- Create some messaging architecture;
- Create another route for logged-in users to have information about their parking history;

# Some prints of API endpoints

- Park a Vehicle
<img src="https://thiagomota.work/prints/Captura%20de%20tela%202025-10-17%20192003.png" width="100%" />

- Unpark a Vehicle
<img src="https://thiagomota.work/prints/Captura%20de%20tela%202025-10-17%20192224.png" width="100%" />

- List all Slots
<img src="https://thiagomota.work/prints/image.png" width="100%" />
