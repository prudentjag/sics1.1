async function loginUser(email, password) {
    try {
        const response = await fetch("/api/login", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ email, password }),
        });

        if (!response.ok) {
            throw new Error("Login failed");
        }

        const data = await response.json();

        localStorage.setItem('sics_token', data.token)

        Swal.fire({
            title: "Success!",
            text: data.message,
            icon: "success",
        });
        window.location.href = 'dashboard'

    } catch (error) {
        console.error("Error logging in:", error);
        return null;
    }
}


async function fetchData(url, method = "GET", body = null, token = true) {
    try {
        const options = {
            method: method,
            headers: {
                "Content-Type": "application/json",
            },
        };

        if (body) {
            options.body = JSON.stringify(body);
        }

        if (token) {
            const token = localStorage.getItem('sics_token')
            options.headers["Authorization"] = `Bearer ${token}`;
        }

        const response = await fetch(url, options);

        if (!response.ok) {
            throw new Error(`Failed to fetch: ${response.status}`);
        }

        const data = await response.json();
        return data;
    } catch (error) {
        console.error("Error fetching data:", error);
        return null; 
    }
}

