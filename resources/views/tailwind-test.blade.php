
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>My First Tailwind UI</title>
</head>


<body class="min-h-screen bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md p-4">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <h1 class="text-xl font-bold text-green-600">
                MyWebsite
            </h1>

            <a href="/tailwind-test"
               class="text-gray-600 hover:text-blue-600">
                Dashboard
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto p-6">

        <h2 class="text-2xl font-bold text-gray-800 mb-6">
            Employee Management
        </h2>

        <!-- Employee Form -->
        <section class="bg-white p-6 rounded-xl shadow-md mb-8">
            <h3 class="text-lg font-semibold mb-5">
                Add New Employee
            </h3>

            <form>
                <!-- Name -->
                <div class="mb-4">
                    <label for="name"
                           class="block text-sm font-medium text-gray-700 mb-2">
                        Employee Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter employee name"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email"
                           class="block text-sm font-medium text-gray-700 mb-2">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="example@email.com"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                <div class="mb-4">
                    <label for="email"
                           class="block text-sm font-medium text-gray-700 mb-2">
                      Phone
                    </label>

                    <input
                        type="phone"
                        id="phone"
                        name="phone"
                        placeholder="enter phone"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    ></div>

                <!-- Position -->
                <div class="mb-4">
                    <label for="position"
                           class="block text-sm font-medium text-gray-700 mb-2">
                        Position
                    </label>

                    <select
                        id="position"
                        name="position"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                        <option value="">Select position</option>
                        <option value="Developer">Developer</option>
                        <option value="Designer">Designer</option>
                        <option value="Department">Department</option>
                        <option value="QA Tester">QA Tester</option>
                    </select>
                </div>

                <!-- Buttons -->
                <div class="flex gap-3 mt-6">
                    <button
                        type="submit"
                        class="bg-green-600 text-white px-5 py-2 rounded-lg hover:bg-green-700 transition"
                    >
                        Save Employee
                    </button>

                    <button
                        type="reset"
                        class="bg-gray-200 text-gray-700 px-5 py-2 rounded-lg hover:bg-gray-300 transition"
                    >
                        Clear
                    </button>
                </div>
            </form>
        </section>

        <!-- Employee Table -->
        <section class="bg-white p-6 rounded-xl shadow-md">
            <h3 class="text-lg font-semibold mb-5">
                Employee List
            </h3>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-100 text-gray-700">
                            <th class="p-3 border-b">ID</th>
                            <th class="p-3 border-b">Name</th>
                            <th class="p-3 border-b">Email</th>
                            <th class="p-3 border-b">phone</th>
                            <th class="p-3 border-b">Position</th>
                            <th class="p-3 border-b">Status</th>
                            <th class="p-3 border-b">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="p-3 border-b">1</td>
                            <td class="p-3 border-b">Mg Mg</td>
                            <td class="p-3 border-b">mgmg@example.com</td>
                            <td class="p-3 border-b">0976666342</td>
                            <td class="p-3 border-b">Developer</td>
                            <td class="p-3 border-b">
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                    Active
                                </span>
                            </td>
                            <td class="p-3 border-b">
                                <button type="button"
                                    class="text-blue-600 hover:text-blue-800">
                                    Edit
                                </button>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="p-3 border-b">2</td>
                            <td class="p-3 border-b">Aye Aye</td>
                            <td class="p-3 border-b">ayeaye@example.com</td>
                            <td class="p-3 border-b">09983473899</td>
                            <td class="p-3 border-b">QA Tester</td>
                            <td class="p-3 border-b">
                                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">
                                    Pending
                                </span>
                            </td>
                            <td class="p-3 border-b">
                                <button type="button"
                                    class="text-blue-600 hover:text-blue-800">
                                    Edit
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </main>
</body>

</html>
