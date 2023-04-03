<!DOCTYPE html>
<html>
<head>
    <title>Pagination and Entries Example</title>
</head>
<body>
    <h1>Users</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        {% for user in users.items %}
        <tr>
            <td>{{ user.id }}</td>
            <td>{{ user.name }}</td>
            <td>{{ user.email }}</td>
        </tr>
        {% endfor %}
    </table>
    <p>Showing {{ users.items|length }} of {{ total_users }} users</p>
    <p>
        {% if users.has_prev %}
            <a href="{{ url_for('index', page=users.prev_num, per_page=users.per_page) }}">Prev</a>
        {% else %}
            Prev
        {% endif %}
        {% for num in users.iter_pages(left_edge=1, left_current=2, right_current=3, right_edge=1) %}
            {% if num %}
                {% if users.page == num %}
                    <strong>{{ num }}</strong>
                {% else %}
                    <a href="{{ url_for('index', page=num, per_page=users.per_page) }}">{{ num }}</a>
                {% endif %}
            {% else %}
                ...
            {% endif %}
        {% endfor %}
        {% if users.has_next %}
            <a href="{{ url_for('index', page=users.next_num, per_page=users.per_page) }}">Next</a>
        {% else %}
            Next
        {% endif %}
    </p>
</body>
</html>
