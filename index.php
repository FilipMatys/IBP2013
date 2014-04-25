<!doctype html>
<html class="no-js" lang="en" ng-app="CorlyWMT">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Corly | Web Management Tool</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/foundation.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/foundation-icons/foundation-icons.css" />
    <script src="js/modernizr.js"></script>
</head>
<body>
    <div ui-view></div>
    <script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/angular.min.js" type="text/javascript"></script>
    <script src="js/angular-ui-router.min.js" type="text/javascript"></script>
    <script src="js/angular-file-upload.min.js" type="text/javascript"></script>
    <script src="js/ng-google-chart.js" type="text/javascript"></script>
    <!-- Application controllers -->
    <script src="js/controllers/ApplicationController.js" type="text/javascript"></script>
    <script src="js/factories.js" type="text/javascript"></script>
    <script src="js/controllers/LoginController.js" type="text/javascript"></script>
    <script src="js/controllers/HomeController.js" type="text/javascript"></script>
    <script src="js/controllers/DashboardController.js" type="text/javascript"></script>
    <script src="js/controllers/ImportController.js" type="text/javascript"></script>
    <script src="js/controllers/SettingsController.js" type="text/javascript"></script>
    <script src="js/controllers/UsersController.js" type="text/javascript"></script>
    <script src="js/controllers/PluginManagementController.js" type="text/javascript"></script>
    <script src="js/controllers/ProfileController.js" type="text/javascript"></script>
    <script src="js/controllers/PluginController.js" type="text/javascript"></script>
    <script src="js/controllers/DataOverviewController.js" type="text/javascript"></script>
    <script src="js/controllers/PluginOverviewController.js" type="text/javascript"></script>
    <script src="js/controllers/ProjectOverviewController.js" type="text/javascript"></script>
    <script src="js/controllers/SubmissionOverviewController.js" type="text/javascript"></script>
    <script src="js/controllers/DifferenceOverviewController.js" type="text/javascript"></script>
    <!-- Visualization directives -->
    <script src="visualization/submission/js/DynamicSubmissionComponentLoader.js" type="text/javascript"></script>
    <script src="visualization/project/js/DynamicProjectComponentLoader.js" type="text/javascript"></script>
    <script src="visualization/difference/js/DynamicDifferenceComponentLoader.js" type="text/javascript"></script>
    <script src="visualization/components/submissionList/js/SubmissionList.js" type="text/javascript"></script>
    <script src="visualization/components/googleChart/js/GoogleChart.js" type="text/javascript"></script>
    <script src="visualization/components/testCaseList/js/TestCaseList.js" type="text/javascript"></script>
    <script src="visualization/components/difference/js/DifferenceList.js" type="text/javascript"></script>
    <script>
        $(document).foundation();
    </script>
</body>
</html>