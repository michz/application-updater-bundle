application-updater-bundle
==========================

Symfony bundle that updates a deployed web application in-place.


Configuration
-------------

    application_updater:
      minimum_stability: dev                # dev, alpha, beta, RC, stable
      release_provider: github_releases     # by now only github_releases
      github_release_url: "https://api.github.com/repos/michz/shinage-player/releases/latest"
      storage:
        path: "/tmp/application_update.zip" # where to store the application package before installation
        clean: true                         # whether to delete the package after installation
      protected_paths:                      # files and paths that won't be overriden or deleted
        - "app/config/parameters.yml"

