class User {
    static async getUsers() {
        const response = await fetch("https://jsonplaceholder.typicode.com/users")

        const users = await response.json();

        if (!response.ok) {
            throw new Error("couldn't fetch data");
        }

        return users;

    }
}

class Card {
    card;
    constructor(card_type, data) {
        this.makeCard(card_type, data);
    }

    makeCard(card_type, data) {
        switch (card_type) {
            case "user":
                this.card = this.userCard(data);
                break;
            default:
                throw new Error("no matching card");
        }
    }

    userCard({ name, email }) {
        return ` <div class="col-4">
        <div class="card">
          <div class="bg-secondary card-header" style="height: 300px;"></div>
          <div class="card-body">
            <h5 class="card-title">${name}</h5>
            <p class="card-text">${email}</p>
            <a href="#" class="btn btn-primary text-decoration-none">click me</a>
          </div>
        </div>
        </div>`;

    }
}

const start = async () => {
    const usersRow = document.getElementById("users");
    try {
        const users = await User.getUsers();
        users.forEach(user => {
            const userCard = new Card("user", {
                name: user.name,
                email: user.email
            });
            usersRow.insertAdjacentHTML("beforeend", userCard.card);
        });


    } catch (error) {
        if (error instanceof SyntaxError) {
            console.log("unexpected error occured.please contact the support if the problem persist");
        }
        else {
            console.log(error.message);
        }
    }
}

start();