📊 Kamran DataTable

This Laravel package automatically initializes DataTables with export buttons for tables with `id="dataTable"`.

🚀 Features:

✅ Auto-initializes DataTables on tables with id="dataTable"
📁 Includes export buttons (CSV, Excel, PDF, Print) with searching and pagination
🎨 Easy Blade integration
🔌 Lightweight and ready to use

🛠 Installation

1. Add this reposotiry to your Laravel App. Update Composer.json by adding this:
   "repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/your-username/kamran-datatable"
    }
Add this to the end of the file
3. Run "composer require kamran/datatble:dev-master"
4. Include the Blade view in your layout: `@include('kamran-datatable::datatable')`

Now any table with `id="dataTable"` will be automatically enhanced.

👨‍💻 Author

Md Kamran Hosan

📧 Email: mdkamranhosan98@gmail.com

🔗 LinkedIn: linkedin.com/in/md-kamran-hosan-693023261
