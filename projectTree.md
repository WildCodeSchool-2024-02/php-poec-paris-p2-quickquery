# QuickQuery

```
php-poec-paris-p2-quickquery
├─ .editorconfig
├─ .git
│  ├─ FETCH_HEAD
│  ├─ HEAD
│  ├─ config
│  ├─ description
│  ├─ hooks
│  │  ├─ applypatch-msg.sample
│  │  ├─ commit-msg
│  │  ├─ commit-msg.sample
│  │  ├─ fsmonitor-watchman.sample
│  │  ├─ post-update.sample
│  │  ├─ pre-applypatch.sample
│  │  ├─ pre-commit
│  │  ├─ pre-commit.sample
│  │  ├─ pre-merge-commit.sample
│  │  ├─ pre-push.sample
│  │  ├─ pre-rebase.sample
│  │  ├─ pre-receive.sample
│  │  ├─ prepare-commit-msg.sample
│  │  ├─ push-to-checkout.sample
│  │  ├─ sendemail-validate.sample
│  │  └─ update.sample
│  ├─ index
│  ├─ info
│  │  └─ exclude
│  ├─ logs
│  │  ├─ HEAD
│  │  └─ refs
│  │     ├─ heads
│  │     │  ├─ S3US07_mail
│  │     │  └─ dev
│  │     └─ remotes
│  │        └─ origin
│  │           └─ HEAD
│  ├─ objects
│  │  ├─ 01
│  │  │  └─ f84eaa6945bb4d01066f721f28f4f9f288c150
│  │  ├─ 0b
│  │  │  └─ a3bafcfaecacda531b139a03b8eda9db0a7b05
│  │  ├─ 0c
│  │  │  └─ 74ba27dada1338d3c99e406e79f389e8ce6b8e
│  │  ├─ 12
│  │  │  └─ dbb8ec1f0bd6afbe12934ba6add4d90252b469
│  │  ├─ 1b
│  │  │  └─ c2b92a15dba618a164717c0b7b3e155fc8a892
│  │  ├─ 63
│  │  │  └─ 8c09a147d6a6cf4e5d491a2c25cef183ff302b
│  │  ├─ 69
│  │  │  └─ 2ef00c4b600e3bb0a14568376644080b15d1be
│  │  ├─ 75
│  │  │  └─ 14c213b66ef617312e8b04ab66577cb3623d11
│  │  ├─ 8b
│  │  │  └─ 491bda96455948b58358c400cd102c751b9a35
│  │  ├─ d2
│  │  │  └─ 8f3e112c9de1942548e97db7cc5b0bdf745f92
│  │  ├─ e9
│  │  │  └─ fd94277e3c4a825ff9c4b2cd6a61f2559b2362
│  │  ├─ eb
│  │  │  └─ 778d455ec535118ce0e74faa5e4a8f3f8c3131
│  │  ├─ info
│  │  └─ pack
│  │     ├─ pack-ee1f245ca4e4997ba39f42cb373220f56dafd88e.idx
│  │     ├─ pack-ee1f245ca4e4997ba39f42cb373220f56dafd88e.pack
│  │     └─ pack-ee1f245ca4e4997ba39f42cb373220f56dafd88e.rev
│  ├─ packed-refs
│  └─ refs
│     ├─ heads
│     │  ├─ S3US07_mail
│     │  └─ dev
│     ├─ remotes
│     │  └─ origin
│     │     └─ HEAD
│     └─ tags
├─ .github
│  └─ workflows
│     ├─ deploy-traefik.yml
│     ├─ main.yml
│     └─ remove.yml
├─ .gitignore
├─ .tours
│  ├─ code_tour_menu.png
│  ├─ photo-1632178151697-fd971baa906f.jpg
│  ├─ routing.tour
│  ├─ routing_meme.jpg
│  ├─ schema_1_routing.png
│  ├─ simple-mvc.tour
│  └─ simple_MVC.png
├─ Dockerfile
├─ README.md
├─ composer.json
├─ composer.lock
├─ config
│  ├─ config.php
│  └─ debug.php
├─ database-setup.sh
├─ database.sql
├─ docker-compose.override.yml
├─ docker-compose.prod.yml
├─ docker-compose.yml
├─ docker-entry.sh
├─ grumphp.yml
├─ migration.php
├─ nginx.conf
├─ php.ini
├─ phpcs.xml
├─ phpmd.xml
├─ phpstan.neon
├─ public
│  ├─ .htaccess
│  ├─ assets
│  │  ├─ css
│  │  │  └─ style.css
│  │  └─ images
│  │     ├─ favicon.png
│  │     ├─ quickquery_logo.png
│  │     └─ quickquery_logo_3.png
│  └─ index.php
├─ src
│  ├─ Controller
│  │  ├─ AbstractController.php
│  │  ├─ ContactController.php
│  │  ├─ DashboardController.php
│  │  ├─ QuestionController.php
│  │  └─ UserController.php
│  ├─ Model
│  │  ├─ AbstractManager.php
│  │  ├─ AlertManager.php
│  │  ├─ Connection.php
│  │  ├─ ParticipantManager.php
│  │  ├─ QuestionManager.php
│  │  ├─ TagManager.php
│  │  └─ UserManager.php
│  ├─ View
│  │  ├─ Contact
│  │  │  ├─ form.html.twig
│  │  │  └─ index.html.twig
│  │  ├─ Home
│  │  │  └─ index.html.twig
│  │  ├─ Mail
│  │  │  └─ mail.html.twig
│  │  ├─ Question
│  │  │  ├─ _form.html.twig
│  │  │  └─ add.html.twig
│  │  ├─ User
│  │  │  ├─ _form.html.twig
│  │  │  ├─ info.html.twig
│  │  │  ├─ login.html.twig
│  │  │  └─ register.html.twig
│  │  ├─ header.html.twig
│  │  ├─ layout.html.twig
│  │  └─ sidebar.html.twig
│  ├─ routes.php
│  └─ routing.php
└─ vendor
   ├─ amphp
   │  ├─ amp
   │  │  ├─ LICENSE
   │  │  ├─ composer.json
   │  │  └─ lib
   │  │     ├─ CallableMaker.php
   │  │     ├─ CancellationToken.php
   │  │     ├─ CancellationTokenSource.php
   │  │     ├─ CancelledException.php
   │  │     ├─ CombinedCancellationToken.php
   │  │     ├─ Coroutine.php
   │  │     ├─ Deferred.php
   │  │     ├─ Delayed.php
   │  │     ├─ Emitter.php
   │  │     ├─ Failure.php
   │  │     ├─ Internal
   │  │     │  ├─ Placeholder.php
   │  │     │  ├─ PrivateIterator.php
   │  │     │  ├─ PrivatePromise.php
   │  │     │  ├─ Producer.php
   │  │     │  ├─ ResolutionQueue.php
   │  │     │  └─ functions.php
   │  │     ├─ InvalidYieldError.php
   │  │     ├─ Iterator.php
   │  │     ├─ LazyPromise.php
   │  │     ├─ Loop
   │  │     │  ├─ Driver.php
   │  │     │  ├─ DriverFactory.php
   │  │     │  ├─ EvDriver.php
   │  │     │  ├─ EventDriver.php
   │  │     │  ├─ Internal
   │  │     │  │  └─ TimerQueue.php
   │  │     │  ├─ InvalidWatcherError.php
   │  │     │  ├─ NativeDriver.php
   │  │     │  ├─ TracingDriver.php
   │  │     │  ├─ UnsupportedFeatureException.php
   │  │     │  ├─ UvDriver.php
   │  │     │  └─ Watcher.php
   │  │     ├─ Loop.php
   │  │     ├─ MultiReasonException.php
   │  │     ├─ NullCancellationToken.php
   │  │     ├─ Producer.php
   │  │     ├─ Promise.php
   │  │     ├─ Struct.php
   │  │     ├─ Success.php
   │  │     ├─ TimeoutCancellationToken.php
   │  │     ├─ TimeoutException.php
   │  │     └─ functions.php
   │  ├─ byte-stream
   │  │  ├─ .github
   │  │  │  └─ workflows
   │  │  │     └─ ci.yml
   │  │  ├─ LICENSE
   │  │  ├─ composer.json
   │  │  ├─ lib
   │  │  │  ├─ Base64
   │  │  │  │  ├─ Base64DecodingInputStream.php
   │  │  │  │  ├─ Base64DecodingOutputStream.php
   │  │  │  │  ├─ Base64EncodingInputStream.php
   │  │  │  │  └─ Base64EncodingOutputStream.php
   │  │  │  ├─ ClosedException.php
   │  │  │  ├─ InMemoryStream.php
   │  │  │  ├─ InputStream.php
   │  │  │  ├─ InputStreamChain.php
   │  │  │  ├─ IteratorStream.php
   │  │  │  ├─ LineReader.php
   │  │  │  ├─ Message.php
   │  │  │  ├─ OutputBuffer.php
   │  │  │  ├─ OutputStream.php
   │  │  │  ├─ Payload.php
   │  │  │  ├─ PendingReadError.php
   │  │  │  ├─ ResourceInputStream.php
   │  │  │  ├─ ResourceOutputStream.php
   │  │  │  ├─ StreamException.php
   │  │  │  ├─ ZlibInputStream.php
   │  │  │  ├─ ZlibOutputStream.php
   │  │  │  └─ functions.php
   │  │  └─ psalm.xml
   │  ├─ parallel
   │  │  ├─ .github
   │  │  │  └─ workflows
   │  │  │     └─ ci.yml
   │  │  ├─ .gitmodules
   │  │  ├─ .php_cs.dist
   │  │  ├─ .valgrindrc
   │  │  ├─ LICENSE
   │  │  ├─ Makefile
   │  │  ├─ README.md
   │  │  ├─ Vagrantfile
   │  │  ├─ appveyor.yml
   │  │  ├─ composer.json
   │  │  ├─ docs
   │  │  │  ├─ .shared
   │  │  │  ├─ Gemfile
   │  │  │  ├─ _config.yml
   │  │  │  ├─ index.md
   │  │  │  ├─ processes.md
   │  │  │  ├─ worker-pool.md
   │  │  │  └─ workers.md
   │  │  ├─ lib
   │  │  │  ├─ Context
   │  │  │  │  ├─ Context.php
   │  │  │  │  ├─ ContextException.php
   │  │  │  │  ├─ ContextFactory.php
   │  │  │  │  ├─ DefaultContextFactory.php
   │  │  │  │  ├─ Internal
   │  │  │  │  │  ├─ ParallelHub.php
   │  │  │  │  │  ├─ ProcessHub.php
   │  │  │  │  │  ├─ Thread.php
   │  │  │  │  │  └─ process-runner.php
   │  │  │  │  ├─ Parallel.php
   │  │  │  │  ├─ Process.php
   │  │  │  │  ├─ StatusError.php
   │  │  │  │  ├─ Thread.php
   │  │  │  │  └─ functions.php
   │  │  │  ├─ Sync
   │  │  │  │  ├─ Channel.php
   │  │  │  │  ├─ ChannelException.php
   │  │  │  │  ├─ ChannelParser.php
   │  │  │  │  ├─ ChannelledSocket.php
   │  │  │  │  ├─ ChannelledStream.php
   │  │  │  │  ├─ ContextPanicError.php
   │  │  │  │  ├─ ExitFailure.php
   │  │  │  │  ├─ ExitResult.php
   │  │  │  │  ├─ ExitSuccess.php
   │  │  │  │  ├─ Internal
   │  │  │  │  │  └─ ParcelStorage.php
   │  │  │  │  ├─ PanicError.php
   │  │  │  │  ├─ Parcel.php
   │  │  │  │  ├─ ParcelException.php
   │  │  │  │  ├─ SharedMemoryException.php
   │  │  │  │  ├─ SharedMemoryParcel.php
   │  │  │  │  ├─ SynchronizationError.php
   │  │  │  │  ├─ ThreadedParcel.php
   │  │  │  │  └─ functions.php
   │  │  │  └─ Worker
   │  │  │     ├─ BasicEnvironment.php
   │  │  │     ├─ BootstrapWorkerFactory.php
   │  │  │     ├─ CallableTask.php
   │  │  │     ├─ DefaultPool.php
   │  │  │     ├─ DefaultWorkerFactory.php
   │  │  │     ├─ Environment.php
   │  │  │     ├─ Internal
   │  │  │     │  ├─ Job.php
   │  │  │     │  ├─ PooledWorker.php
   │  │  │     │  ├─ TaskFailure.php
   │  │  │     │  ├─ TaskResult.php
   │  │  │     │  ├─ TaskSuccess.php
   │  │  │     │  ├─ WorkerProcess.php
   │  │  │     │  └─ worker-process.php
   │  │  │     ├─ Pool.php
   │  │  │     ├─ Task.php
   │  │  │     ├─ TaskError.php
   │  │  │     ├─ TaskException.php
   │  │  │     ├─ TaskFailureError.php
   │  │  │     ├─ TaskFailureException.php
   │  │  │     ├─ TaskFailureThrowable.php
   │  │  │     ├─ TaskRunner.php
   │  │  │     ├─ TaskWorker.php
   │  │  │     ├─ Worker.php
   │  │  │     ├─ WorkerException.php
   │  │  │     ├─ WorkerFactory.php
   │  │  │     ├─ WorkerParallel.php
   │  │  │     ├─ WorkerProcess.php
   │  │  │     ├─ WorkerThread.php
   │  │  │     └─ functions.php
   │  │  └─ phpdoc.dist.xml
   │  ├─ parallel-functions
   │  │  ├─ .github
   │  │  │  └─ workflows
   │  │  │     └─ ci.yml
   │  │  ├─ LICENSE
   │  │  ├─ composer-require-check.json
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ Internal
   │  │     │  └─ SerializedCallableTask.php
   │  │     └─ functions.php
   │  ├─ parser
   │  │  ├─ .editorconfig
   │  │  ├─ .github
   │  │  │  └─ workflows
   │  │  │     └─ ci.yml
   │  │  ├─ .php-cs-fixer.dist.php
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ composer.json
   │  │  ├─ psalm.xml
   │  │  └─ src
   │  │     ├─ InvalidDelimiterError.php
   │  │     └─ Parser.php
   │  ├─ process
   │  │  ├─ .github
   │  │  │  └─ workflows
   │  │  │     └─ ci.yml
   │  │  ├─ .php_cs
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ bin
   │  │  │  └─ windows
   │  │  │     ├─ ProcessWrapper.exe
   │  │  │     └─ ProcessWrapper64.exe
   │  │  ├─ composer.json
   │  │  └─ lib
   │  │     ├─ Internal
   │  │     │  ├─ Posix
   │  │     │  │  ├─ Handle.php
   │  │     │  │  └─ Runner.php
   │  │     │  ├─ ProcessHandle.php
   │  │     │  ├─ ProcessRunner.php
   │  │     │  ├─ ProcessStatus.php
   │  │     │  └─ Windows
   │  │     │     ├─ Handle.php
   │  │     │     ├─ HandshakeStatus.php
   │  │     │     ├─ PendingSocketClient.php
   │  │     │     ├─ Runner.php
   │  │     │     ├─ SignalCode.php
   │  │     │     └─ SocketConnector.php
   │  │     ├─ Process.php
   │  │     ├─ ProcessException.php
   │  │     ├─ ProcessInputStream.php
   │  │     ├─ ProcessOutputStream.php
   │  │     ├─ StatusError.php
   │  │     └─ functions.php
   │  ├─ serialization
   │  │  ├─ .gitmodules
   │  │  ├─ .php_cs.dist
   │  │  ├─ LICENSE
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ CompressingSerializer.php
   │  │     ├─ JsonSerializer.php
   │  │     ├─ NativeSerializer.php
   │  │     ├─ PassthroughSerializer.php
   │  │     ├─ SerializationException.php
   │  │     ├─ Serializer.php
   │  │     └─ functions.php
   │  └─ sync
   │     ├─ .github
   │     │  └─ workflows
   │     │     └─ ci.yml
   │     ├─ .gitmodules
   │     ├─ .php_cs.dist
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ composer-require-check.json
   │     ├─ composer.json
   │     ├─ docs
   │     │  ├─ .shared
   │     │  ├─ Gemfile
   │     │  ├─ _config.yml
   │     │  ├─ concurrent-iterator.md
   │     │  ├─ index.md
   │     │  ├─ mutex.md
   │     │  └─ semaphore.md
   │     └─ src
   │        ├─ Barrier.php
   │        ├─ ConcurrentIterator
   │        │  └─ functions.php
   │        ├─ FileMutex.php
   │        ├─ Internal
   │        │  ├─ MutexStorage.php
   │        │  └─ SemaphoreStorage.php
   │        ├─ KeyedMutex.php
   │        ├─ KeyedSemaphore.php
   │        ├─ LocalKeyedMutex.php
   │        ├─ LocalKeyedSemaphore.php
   │        ├─ LocalMutex.php
   │        ├─ LocalSemaphore.php
   │        ├─ Lock.php
   │        ├─ Mutex.php
   │        ├─ PosixSemaphore.php
   │        ├─ PrefixedKeyedMutex.php
   │        ├─ PrefixedKeyedSemaphore.php
   │        ├─ Semaphore.php
   │        ├─ SemaphoreMutex.php
   │        ├─ StaticKeyMutex.php
   │        ├─ SyncException.php
   │        ├─ ThreadedMutex.php
   │        ├─ ThreadedSemaphore.php
   │        └─ functions.php
   ├─ autoload.php
   ├─ bin
   │  ├─ grumphp
   │  ├─ jsonlint
   │  ├─ pdepend
   │  ├─ phpcbf
   │  ├─ phpcs
   │  ├─ phpmd
   │  ├─ phpstan
   │  ├─ phpstan.phar
   │  └─ yaml-lint
   ├─ composer
   │  ├─ ClassLoader.php
   │  ├─ InstalledVersions.php
   │  ├─ LICENSE
   │  ├─ autoload_classmap.php
   │  ├─ autoload_files.php
   │  ├─ autoload_namespaces.php
   │  ├─ autoload_psr4.php
   │  ├─ autoload_real.php
   │  ├─ autoload_static.php
   │  ├─ installed.json
   │  ├─ installed.php
   │  ├─ pcre
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ MatchAllResult.php
   │  │     ├─ MatchAllStrictGroupsResult.php
   │  │     ├─ MatchAllWithOffsetsResult.php
   │  │     ├─ MatchResult.php
   │  │     ├─ MatchStrictGroupsResult.php
   │  │     ├─ MatchWithOffsetsResult.php
   │  │     ├─ PcreException.php
   │  │     ├─ Preg.php
   │  │     ├─ Regex.php
   │  │     ├─ ReplaceResult.php
   │  │     └─ UnexpectedNullMatchException.php
   │  ├─ platform_check.php
   │  └─ xdebug-handler
   │     ├─ CHANGELOG.md
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ composer.json
   │     └─ src
   │        ├─ PhpConfig.php
   │        ├─ Process.php
   │        ├─ Status.php
   │        └─ XdebugHandler.php
   ├─ doctrine
   │  ├─ collections
   │  │  ├─ .doctrine-project.json
   │  │  ├─ CONTRIBUTING.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ UPGRADE.md
   │  │  ├─ composer.json
   │  │  ├─ docs
   │  │  │  └─ en
   │  │  │     ├─ derived-collections.rst
   │  │  │     ├─ expression-builder.rst
   │  │  │     ├─ expressions.rst
   │  │  │     ├─ index.rst
   │  │  │     ├─ lazy-collections.rst
   │  │  │     ├─ serialization.rst
   │  │  │     └─ sidebar.rst
   │  │  └─ src
   │  │     ├─ AbstractLazyCollection.php
   │  │     ├─ ArrayCollection.php
   │  │     ├─ Collection.php
   │  │     ├─ Criteria.php
   │  │     ├─ Expr
   │  │     │  ├─ ClosureExpressionVisitor.php
   │  │     │  ├─ Comparison.php
   │  │     │  ├─ CompositeExpression.php
   │  │     │  ├─ Expression.php
   │  │     │  ├─ ExpressionVisitor.php
   │  │     │  └─ Value.php
   │  │     ├─ ExpressionBuilder.php
   │  │     ├─ ReadableCollection.php
   │  │     └─ Selectable.php
   │  └─ deprecations
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ composer.json
   │     ├─ lib
   │     │  └─ Doctrine
   │     │     └─ Deprecations
   │     │        ├─ Deprecation.php
   │     │        └─ PHPUnit
   │     │           └─ VerifyDeprecations.php
   │     └─ phpcs.xml
   ├─ filp
   │  └─ whoops
   │     ├─ .mailmap
   │     ├─ CHANGELOG.md
   │     ├─ LICENSE.md
   │     ├─ SECURITY.md
   │     ├─ composer.json
   │     └─ src
   │        └─ Whoops
   │           ├─ Exception
   │           │  ├─ ErrorException.php
   │           │  ├─ Formatter.php
   │           │  ├─ Frame.php
   │           │  ├─ FrameCollection.php
   │           │  └─ Inspector.php
   │           ├─ Handler
   │           │  ├─ CallbackHandler.php
   │           │  ├─ Handler.php
   │           │  ├─ HandlerInterface.php
   │           │  ├─ JsonResponseHandler.php
   │           │  ├─ PlainTextHandler.php
   │           │  ├─ PrettyPageHandler.php
   │           │  └─ XmlResponseHandler.php
   │           ├─ Inspector
   │           │  ├─ InspectorFactory.php
   │           │  ├─ InspectorFactoryInterface.php
   │           │  └─ InspectorInterface.php
   │           ├─ Resources
   │           │  ├─ css
   │           │  │  ├─ prism.css
   │           │  │  └─ whoops.base.css
   │           │  ├─ js
   │           │  │  ├─ clipboard.min.js
   │           │  │  ├─ prism.js
   │           │  │  ├─ whoops.base.js
   │           │  │  └─ zepto.min.js
   │           │  └─ views
   │           │     ├─ env_details.html.php
   │           │     ├─ frame_code.html.php
   │           │     ├─ frame_list.html.php
   │           │     ├─ frames_container.html.php
   │           │     ├─ frames_description.html.php
   │           │     ├─ header.html.php
   │           │     ├─ header_outer.html.php
   │           │     ├─ layout.html.php
   │           │     ├─ panel_details.html.php
   │           │     ├─ panel_details_outer.html.php
   │           │     ├─ panel_left.html.php
   │           │     └─ panel_left_outer.html.php
   │           ├─ Run.php
   │           ├─ RunInterface.php
   │           └─ Util
   │              ├─ HtmlDumperOutput.php
   │              ├─ Misc.php
   │              ├─ SystemFacade.php
   │              └─ TemplateHelper.php
   ├─ gitonomy
   │  └─ gitlib
   │     ├─ .gitattributes
   │     ├─ .github
   │     │  ├─ CODE_OF_CONDUCT.md
   │     │  ├─ CONTRIBUTING.md
   │     │  ├─ FUNDING.yml
   │     │  ├─ SECURITY.md
   │     │  └─ workflows
   │     │     └─ tests.yml
   │     ├─ .gitignore
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ composer.json
   │     ├─ doc
   │     │  ├─ admin.md
   │     │  ├─ blame.md
   │     │  ├─ blob.md
   │     │  ├─ branch.md
   │     │  ├─ commit.md
   │     │  ├─ diff.md
   │     │  ├─ hooks.md
   │     │  ├─ log.md
   │     │  ├─ references.md
   │     │  ├─ repository.md
   │     │  ├─ revision.md
   │     │  ├─ tree.md
   │     │  └─ workingcopy.md
   │     ├─ phpunit.xml.dist
   │     ├─ src
   │     │  └─ Gitonomy
   │     │     └─ Git
   │     │        ├─ Admin.php
   │     │        ├─ Blame
   │     │        │  └─ Line.php
   │     │        ├─ Blame.php
   │     │        ├─ Blob.php
   │     │        ├─ Commit.php
   │     │        ├─ CommitReference.php
   │     │        ├─ Diff
   │     │        │  ├─ Diff.php
   │     │        │  ├─ File.php
   │     │        │  └─ FileChange.php
   │     │        ├─ Exception
   │     │        │  ├─ GitExceptionInterface.php
   │     │        │  ├─ InvalidArgumentException.php
   │     │        │  ├─ LogicException.php
   │     │        │  ├─ ProcessException.php
   │     │        │  ├─ ReferenceNotFoundException.php
   │     │        │  ├─ RuntimeException.php
   │     │        │  └─ UnexpectedValueException.php
   │     │        ├─ Hooks.php
   │     │        ├─ Log.php
   │     │        ├─ Parser
   │     │        │  ├─ BlameParser.php
   │     │        │  ├─ CommitParser.php
   │     │        │  ├─ DiffParser.php
   │     │        │  ├─ LogParser.php
   │     │        │  ├─ ParserBase.php
   │     │        │  ├─ ReferenceParser.php
   │     │        │  ├─ TagParser.php
   │     │        │  └─ TreeParser.php
   │     │        ├─ PushReference.php
   │     │        ├─ Reference
   │     │        │  ├─ Branch.php
   │     │        │  ├─ Stash.php
   │     │        │  └─ Tag.php
   │     │        ├─ Reference.php
   │     │        ├─ ReferenceBag.php
   │     │        ├─ Repository.php
   │     │        ├─ Revision.php
   │     │        ├─ RevisionList.php
   │     │        ├─ Tree.php
   │     │        ├─ Util
   │     │        │  └─ StringHelper.php
   │     │        └─ WorkingCopy.php
   │     ├─ test-git-versions.sh
   │     └─ tests
   │        ├─ Gitonomy
   │        │  └─ Git
   │        │     └─ Tests
   │        │        ├─ AbstractTest.php
   │        │        ├─ AdminTest.php
   │        │        ├─ BlameTest.php
   │        │        ├─ BlobTest.php
   │        │        ├─ CommitTest.php
   │        │        ├─ DiffTest.php
   │        │        ├─ HooksTest.php
   │        │        ├─ LogTest.php
   │        │        ├─ PushReferenceTest.php
   │        │        ├─ ReferenceBagTest.php
   │        │        ├─ ReferenceTest.php
   │        │        ├─ RepositoryTest.php
   │        │        ├─ RevisionTest.php
   │        │        ├─ TreeTest.php
   │        │        └─ WorkingCopyTest.php
   │        └─ bootstrap.php
   ├─ guzzlehttp
   │  ├─ guzzle
   │  │  ├─ CHANGELOG.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ UPGRADING.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ BodySummarizer.php
   │  │     ├─ BodySummarizerInterface.php
   │  │     ├─ Client.php
   │  │     ├─ ClientInterface.php
   │  │     ├─ ClientTrait.php
   │  │     ├─ Cookie
   │  │     │  ├─ CookieJar.php
   │  │     │  ├─ CookieJarInterface.php
   │  │     │  ├─ FileCookieJar.php
   │  │     │  ├─ SessionCookieJar.php
   │  │     │  └─ SetCookie.php
   │  │     ├─ Exception
   │  │     │  ├─ BadResponseException.php
   │  │     │  ├─ ClientException.php
   │  │     │  ├─ ConnectException.php
   │  │     │  ├─ GuzzleException.php
   │  │     │  ├─ InvalidArgumentException.php
   │  │     │  ├─ RequestException.php
   │  │     │  ├─ ServerException.php
   │  │     │  ├─ TooManyRedirectsException.php
   │  │     │  └─ TransferException.php
   │  │     ├─ Handler
   │  │     │  ├─ CurlFactory.php
   │  │     │  ├─ CurlFactoryInterface.php
   │  │     │  ├─ CurlHandler.php
   │  │     │  ├─ CurlMultiHandler.php
   │  │     │  ├─ EasyHandle.php
   │  │     │  ├─ HeaderProcessor.php
   │  │     │  ├─ MockHandler.php
   │  │     │  ├─ Proxy.php
   │  │     │  └─ StreamHandler.php
   │  │     ├─ HandlerStack.php
   │  │     ├─ MessageFormatter.php
   │  │     ├─ MessageFormatterInterface.php
   │  │     ├─ Middleware.php
   │  │     ├─ Pool.php
   │  │     ├─ PrepareBodyMiddleware.php
   │  │     ├─ RedirectMiddleware.php
   │  │     ├─ RequestOptions.php
   │  │     ├─ RetryMiddleware.php
   │  │     ├─ TransferStats.php
   │  │     ├─ Utils.php
   │  │     ├─ functions.php
   │  │     └─ functions_include.php
   │  ├─ promises
   │  │  ├─ CHANGELOG.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ AggregateException.php
   │  │     ├─ CancellationException.php
   │  │     ├─ Coroutine.php
   │  │     ├─ Create.php
   │  │     ├─ Each.php
   │  │     ├─ EachPromise.php
   │  │     ├─ FulfilledPromise.php
   │  │     ├─ Is.php
   │  │     ├─ Promise.php
   │  │     ├─ PromiseInterface.php
   │  │     ├─ PromisorInterface.php
   │  │     ├─ RejectedPromise.php
   │  │     ├─ RejectionException.php
   │  │     ├─ TaskQueue.php
   │  │     ├─ TaskQueueInterface.php
   │  │     └─ Utils.php
   │  └─ psr7
   │     ├─ CHANGELOG.md
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ composer.json
   │     └─ src
   │        ├─ AppendStream.php
   │        ├─ BufferStream.php
   │        ├─ CachingStream.php
   │        ├─ DroppingStream.php
   │        ├─ Exception
   │        │  └─ MalformedUriException.php
   │        ├─ FnStream.php
   │        ├─ Header.php
   │        ├─ HttpFactory.php
   │        ├─ InflateStream.php
   │        ├─ LazyOpenStream.php
   │        ├─ LimitStream.php
   │        ├─ Message.php
   │        ├─ MessageTrait.php
   │        ├─ MimeType.php
   │        ├─ MultipartStream.php
   │        ├─ NoSeekStream.php
   │        ├─ PumpStream.php
   │        ├─ Query.php
   │        ├─ Request.php
   │        ├─ Response.php
   │        ├─ Rfc7230.php
   │        ├─ ServerRequest.php
   │        ├─ Stream.php
   │        ├─ StreamDecoratorTrait.php
   │        ├─ StreamWrapper.php
   │        ├─ UploadedFile.php
   │        ├─ Uri.php
   │        ├─ UriComparator.php
   │        ├─ UriNormalizer.php
   │        ├─ UriResolver.php
   │        └─ Utils.php
   ├─ laravel
   │  └─ serializable-closure
   │     ├─ LICENSE.md
   │     ├─ README.md
   │     ├─ composer.json
   │     └─ src
   │        ├─ Contracts
   │        │  ├─ Serializable.php
   │        │  └─ Signer.php
   │        ├─ Exceptions
   │        │  ├─ InvalidSignatureException.php
   │        │  ├─ MissingSecretKeyException.php
   │        │  └─ PhpVersionNotSupportedException.php
   │        ├─ SerializableClosure.php
   │        ├─ Serializers
   │        │  ├─ Native.php
   │        │  └─ Signed.php
   │        ├─ Signers
   │        │  └─ Hmac.php
   │        ├─ Support
   │        │  ├─ ClosureScope.php
   │        │  ├─ ClosureStream.php
   │        │  ├─ ReflectionClosure.php
   │        │  └─ SelfReference.php
   │        └─ UnsignedSerializableClosure.php
   ├─ mailjet
   │  └─ mailjet-apiv3-php
   │     ├─ .gitignore
   │     ├─ .php_cs
   │     ├─ .travis.yml
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ composer.json
   │     ├─ phpunit.xml.dist
   │     ├─ src
   │     │  └─ Mailjet
   │     │     ├─ Client.php
   │     │     ├─ Config.php
   │     │     ├─ Normalizer
   │     │     │  ├─ ContactNormalizer.php
   │     │     │  └─ NormalizerInterface.php
   │     │     ├─ Request.php
   │     │     ├─ Resources.php
   │     │     └─ Response.php
   │     └─ test
   │        └─ Mailjet
   │           ├─ ClientTest.php
   │           ├─ MailjetApiv3Test.php
   │           ├─ RequestTest.php
   │           ├─ ResponseTest.php
   │           └─ test.php
   ├─ monolog
   │  └─ monolog
   │     ├─ CHANGELOG.md
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ composer.json
   │     └─ src
   │        └─ Monolog
   │           ├─ Attribute
   │           │  └─ AsMonologProcessor.php
   │           ├─ DateTimeImmutable.php
   │           ├─ ErrorHandler.php
   │           ├─ Formatter
   │           │  ├─ ChromePHPFormatter.php
   │           │  ├─ ElasticaFormatter.php
   │           │  ├─ ElasticsearchFormatter.php
   │           │  ├─ FlowdockFormatter.php
   │           │  ├─ FluentdFormatter.php
   │           │  ├─ FormatterInterface.php
   │           │  ├─ GelfMessageFormatter.php
   │           │  ├─ GoogleCloudLoggingFormatter.php
   │           │  ├─ HtmlFormatter.php
   │           │  ├─ JsonFormatter.php
   │           │  ├─ LineFormatter.php
   │           │  ├─ LogglyFormatter.php
   │           │  ├─ LogmaticFormatter.php
   │           │  ├─ LogstashFormatter.php
   │           │  ├─ MongoDBFormatter.php
   │           │  ├─ NormalizerFormatter.php
   │           │  ├─ ScalarFormatter.php
   │           │  ├─ SyslogFormatter.php
   │           │  └─ WildfireFormatter.php
   │           ├─ Handler
   │           │  ├─ AbstractHandler.php
   │           │  ├─ AbstractProcessingHandler.php
   │           │  ├─ AbstractSyslogHandler.php
   │           │  ├─ AmqpHandler.php
   │           │  ├─ BrowserConsoleHandler.php
   │           │  ├─ BufferHandler.php
   │           │  ├─ ChromePHPHandler.php
   │           │  ├─ CouchDBHandler.php
   │           │  ├─ CubeHandler.php
   │           │  ├─ Curl
   │           │  │  └─ Util.php
   │           │  ├─ DeduplicationHandler.php
   │           │  ├─ DoctrineCouchDBHandler.php
   │           │  ├─ DynamoDbHandler.php
   │           │  ├─ ElasticaHandler.php
   │           │  ├─ ElasticsearchHandler.php
   │           │  ├─ ErrorLogHandler.php
   │           │  ├─ FallbackGroupHandler.php
   │           │  ├─ FilterHandler.php
   │           │  ├─ FingersCrossed
   │           │  │  ├─ ActivationStrategyInterface.php
   │           │  │  ├─ ChannelLevelActivationStrategy.php
   │           │  │  └─ ErrorLevelActivationStrategy.php
   │           │  ├─ FingersCrossedHandler.php
   │           │  ├─ FirePHPHandler.php
   │           │  ├─ FleepHookHandler.php
   │           │  ├─ FlowdockHandler.php
   │           │  ├─ FormattableHandlerInterface.php
   │           │  ├─ FormattableHandlerTrait.php
   │           │  ├─ GelfHandler.php
   │           │  ├─ GroupHandler.php
   │           │  ├─ Handler.php
   │           │  ├─ HandlerInterface.php
   │           │  ├─ HandlerWrapper.php
   │           │  ├─ IFTTTHandler.php
   │           │  ├─ InsightOpsHandler.php
   │           │  ├─ LogEntriesHandler.php
   │           │  ├─ LogglyHandler.php
   │           │  ├─ LogmaticHandler.php
   │           │  ├─ MailHandler.php
   │           │  ├─ MandrillHandler.php
   │           │  ├─ MissingExtensionException.php
   │           │  ├─ MongoDBHandler.php
   │           │  ├─ NativeMailerHandler.php
   │           │  ├─ NewRelicHandler.php
   │           │  ├─ NoopHandler.php
   │           │  ├─ NullHandler.php
   │           │  ├─ OverflowHandler.php
   │           │  ├─ PHPConsoleHandler.php
   │           │  ├─ ProcessHandler.php
   │           │  ├─ ProcessableHandlerInterface.php
   │           │  ├─ ProcessableHandlerTrait.php
   │           │  ├─ PsrHandler.php
   │           │  ├─ PushoverHandler.php
   │           │  ├─ RedisHandler.php
   │           │  ├─ RedisPubSubHandler.php
   │           │  ├─ RollbarHandler.php
   │           │  ├─ RotatingFileHandler.php
   │           │  ├─ SamplingHandler.php
   │           │  ├─ SendGridHandler.php
   │           │  ├─ Slack
   │           │  │  └─ SlackRecord.php
   │           │  ├─ SlackHandler.php
   │           │  ├─ SlackWebhookHandler.php
   │           │  ├─ SocketHandler.php
   │           │  ├─ SqsHandler.php
   │           │  ├─ StreamHandler.php
   │           │  ├─ SymfonyMailerHandler.php
   │           │  ├─ SyslogHandler.php
   │           │  ├─ SyslogUdp
   │           │  │  └─ UdpSocket.php
   │           │  ├─ SyslogUdpHandler.php
   │           │  ├─ TelegramBotHandler.php
   │           │  ├─ TestHandler.php
   │           │  ├─ WebRequestRecognizerTrait.php
   │           │  ├─ WhatFailureGroupHandler.php
   │           │  └─ ZendMonitorHandler.php
   │           ├─ Level.php
   │           ├─ LogRecord.php
   │           ├─ Logger.php
   │           ├─ Processor
   │           │  ├─ ClosureContextProcessor.php
   │           │  ├─ GitProcessor.php
   │           │  ├─ HostnameProcessor.php
   │           │  ├─ IntrospectionProcessor.php
   │           │  ├─ MemoryPeakUsageProcessor.php
   │           │  ├─ MemoryProcessor.php
   │           │  ├─ MemoryUsageProcessor.php
   │           │  ├─ MercurialProcessor.php
   │           │  ├─ ProcessIdProcessor.php
   │           │  ├─ ProcessorInterface.php
   │           │  ├─ PsrLogMessageProcessor.php
   │           │  ├─ TagProcessor.php
   │           │  ├─ UidProcessor.php
   │           │  └─ WebProcessor.php
   │           ├─ Registry.php
   │           ├─ ResettableInterface.php
   │           ├─ SignalHandler.php
   │           ├─ Test
   │           │  └─ TestCase.php
   │           └─ Utils.php
   ├─ ondram
   │  └─ ci-detector
   │     ├─ CHANGELOG.md
   │     ├─ LICENCE.md
   │     ├─ README.md
   │     ├─ composer.json
   │     └─ src
   │        ├─ Ci
   │        │  ├─ AbstractCi.php
   │        │  ├─ AppVeyor.php
   │        │  ├─ AwsCodeBuild.php
   │        │  ├─ AzurePipelines.php
   │        │  ├─ Bamboo.php
   │        │  ├─ BitbucketPipelines.php
   │        │  ├─ Buddy.php
   │        │  ├─ CiInterface.php
   │        │  ├─ Circle.php
   │        │  ├─ Codeship.php
   │        │  ├─ Continuousphp.php
   │        │  ├─ Drone.php
   │        │  ├─ GitHubActions.php
   │        │  ├─ GitLab.php
   │        │  ├─ Jenkins.php
   │        │  ├─ SourceHut.php
   │        │  ├─ TeamCity.php
   │        │  ├─ Travis.php
   │        │  └─ Wercker.php
   │        ├─ CiDetector.php
   │        ├─ CiDetectorInterface.php
   │        ├─ Env.php
   │        ├─ Exception
   │        │  └─ CiNotDetectedException.php
   │        └─ TrinaryLogic.php
   ├─ pdepend
   │  └─ pdepend
   │     ├─ CHANGELOG.md
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ build.properties
   │     ├─ composer.json
   │     ├─ phpcs.xml.dist
   │     └─ src
   │        ├─ bin
   │        │  ├─ pdepend
   │        │  ├─ pdepend.bat
   │        │  └─ pdepend.php
   │        └─ main
   │           ├─ php
   │           │  └─ PDepend
   │           │     ├─ Application.php
   │           │     ├─ DbusUI
   │           │     │  └─ ResultPrinter.php
   │           │     ├─ DependencyInjection
   │           │     │  ├─ Compiler
   │           │     │  │  └─ ProcessListenerPass.php
   │           │     │  ├─ Configuration.php
   │           │     │  ├─ Extension.php
   │           │     │  ├─ ExtensionManager.php
   │           │     │  ├─ PdependExtension.php
   │           │     │  └─ TreeBuilder.php
   │           │     ├─ Engine.php
   │           │     ├─ Input
   │           │     │  ├─ CompositeFilter.php
   │           │     │  ├─ ExcludePathFilter.php
   │           │     │  ├─ ExtensionFilter.php
   │           │     │  ├─ Filter.php
   │           │     │  └─ Iterator.php
   │           │     ├─ Metrics
   │           │     │  ├─ AbstractAnalyzer.php
   │           │     │  ├─ AbstractCachingAnalyzer.php
   │           │     │  ├─ AggregateAnalyzer.php
   │           │     │  ├─ Analyzer
   │           │     │  │  ├─ ClassDependencyAnalyzer.php
   │           │     │  │  ├─ ClassLevelAnalyzer.php
   │           │     │  │  ├─ CodeRankAnalyzer
   │           │     │  │  │  ├─ CodeRankStrategyI.php
   │           │     │  │  │  ├─ InheritanceStrategy.php
   │           │     │  │  │  ├─ MethodStrategy.php
   │           │     │  │  │  ├─ PropertyStrategy.php
   │           │     │  │  │  └─ StrategyFactory.php
   │           │     │  │  ├─ CodeRankAnalyzer.php
   │           │     │  │  ├─ CohesionAnalyzer.php
   │           │     │  │  ├─ CouplingAnalyzer.php
   │           │     │  │  ├─ CrapIndexAnalyzer.php
   │           │     │  │  ├─ CyclomaticComplexityAnalyzer.php
   │           │     │  │  ├─ DependencyAnalyzer.php
   │           │     │  │  ├─ HalsteadAnalyzer.php
   │           │     │  │  ├─ HierarchyAnalyzer.php
   │           │     │  │  ├─ InheritanceAnalyzer.php
   │           │     │  │  ├─ MaintainabilityIndexAnalyzer.php
   │           │     │  │  ├─ NPathComplexityAnalyzer.php
   │           │     │  │  ├─ NodeCountAnalyzer.php
   │           │     │  │  └─ NodeLocAnalyzer.php
   │           │     │  ├─ Analyzer.php
   │           │     │  ├─ AnalyzerCacheAware.php
   │           │     │  ├─ AnalyzerFactory.php
   │           │     │  ├─ AnalyzerFilterAware.php
   │           │     │  ├─ AnalyzerIterator.php
   │           │     │  ├─ AnalyzerListener.php
   │           │     │  ├─ AnalyzerNodeAware.php
   │           │     │  └─ AnalyzerProjectAware.php
   │           │     ├─ ProcessListener.php
   │           │     ├─ Report
   │           │     │  ├─ CodeAwareGenerator.php
   │           │     │  ├─ Dependencies
   │           │     │  │  └─ Xml.php
   │           │     │  ├─ FileAwareGenerator.php
   │           │     │  ├─ Jdepend
   │           │     │  │  ├─ Chart.php
   │           │     │  │  ├─ Xml.php
   │           │     │  │  └─ chart.svg
   │           │     │  ├─ NoLogOutputException.php
   │           │     │  ├─ Overview
   │           │     │  │  ├─ Pyramid.php
   │           │     │  │  └─ pyramid.svg
   │           │     │  ├─ ReportGenerator.php
   │           │     │  ├─ ReportGeneratorFactory.php
   │           │     │  └─ Summary
   │           │     │     └─ Xml.php
   │           │     ├─ Source
   │           │     │  ├─ AST
   │           │     │  │  ├─ ASTAllocationExpression.php
   │           │     │  │  ├─ ASTAnonymousClass.php
   │           │     │  │  ├─ ASTArguments.php
   │           │     │  │  ├─ ASTArray.php
   │           │     │  │  ├─ ASTArrayElement.php
   │           │     │  │  ├─ ASTArrayIndexExpression.php
   │           │     │  │  ├─ ASTArtifact.php
   │           │     │  │  ├─ ASTArtifactList
   │           │     │  │  │  ├─ ArtifactFilter.php
   │           │     │  │  │  ├─ CollectionArtifactFilter.php
   │           │     │  │  │  ├─ NullArtifactFilter.php
   │           │     │  │  │  └─ PackageArtifactFilter.php
   │           │     │  │  ├─ ASTArtifactList.php
   │           │     │  │  ├─ ASTAssignmentExpression.php
   │           │     │  │  ├─ ASTBooleanAndExpression.php
   │           │     │  │  ├─ ASTBooleanOrExpression.php
   │           │     │  │  ├─ ASTBreakStatement.php
   │           │     │  │  ├─ ASTCallable.php
   │           │     │  │  ├─ ASTCastExpression.php
   │           │     │  │  ├─ ASTCatchStatement.php
   │           │     │  │  ├─ ASTClass.php
   │           │     │  │  ├─ ASTClassFqnPostfix.php
   │           │     │  │  ├─ ASTClassOrInterfaceRecursiveInheritanceException.php
   │           │     │  │  ├─ ASTClassOrInterfaceReference.php
   │           │     │  │  ├─ ASTClassOrInterfaceReferenceIterator.php
   │           │     │  │  ├─ ASTClassReference.php
   │           │     │  │  ├─ ASTCloneExpression.php
   │           │     │  │  ├─ ASTClosure.php
   │           │     │  │  ├─ ASTComment.php
   │           │     │  │  ├─ ASTCompilationUnit.php
   │           │     │  │  ├─ ASTCompilationUnitNotFoundException.php
   │           │     │  │  ├─ ASTCompoundExpression.php
   │           │     │  │  ├─ ASTCompoundVariable.php
   │           │     │  │  ├─ ASTConditionalExpression.php
   │           │     │  │  ├─ ASTConstant.php
   │           │     │  │  ├─ ASTConstantDeclarator.php
   │           │     │  │  ├─ ASTConstantDefinition.php
   │           │     │  │  ├─ ASTConstantPostfix.php
   │           │     │  │  ├─ ASTContinueStatement.php
   │           │     │  │  ├─ ASTDeclareStatement.php
   │           │     │  │  ├─ ASTDoWhileStatement.php
   │           │     │  │  ├─ ASTEchoStatement.php
   │           │     │  │  ├─ ASTElseIfStatement.php
   │           │     │  │  ├─ ASTEnum.php
   │           │     │  │  ├─ ASTEnumCase.php
   │           │     │  │  ├─ ASTEvalExpression.php
   │           │     │  │  ├─ ASTExitExpression.php
   │           │     │  │  ├─ ASTExpression.php
   │           │     │  │  ├─ ASTFieldDeclaration.php
   │           │     │  │  ├─ ASTFinallyStatement.php
   │           │     │  │  ├─ ASTForInit.php
   │           │     │  │  ├─ ASTForStatement.php
   │           │     │  │  ├─ ASTForUpdate.php
   │           │     │  │  ├─ ASTForeachStatement.php
   │           │     │  │  ├─ ASTFormalParameter.php
   │           │     │  │  ├─ ASTFormalParameters.php
   │           │     │  │  ├─ ASTFunction.php
   │           │     │  │  ├─ ASTFunctionPostfix.php
   │           │     │  │  ├─ ASTGlobalStatement.php
   │           │     │  │  ├─ ASTGotoStatement.php
   │           │     │  │  ├─ ASTHeredoc.php
   │           │     │  │  ├─ ASTIdentifier.php
   │           │     │  │  ├─ ASTIfStatement.php
   │           │     │  │  ├─ ASTIncludeExpression.php
   │           │     │  │  ├─ ASTIndexExpression.php
   │           │     │  │  ├─ ASTInstanceOfExpression.php
   │           │     │  │  ├─ ASTInterface.php
   │           │     │  │  ├─ ASTIntersectionType.php
   │           │     │  │  ├─ ASTInvocation.php
   │           │     │  │  ├─ ASTIssetExpression.php
   │           │     │  │  ├─ ASTLabelStatement.php
   │           │     │  │  ├─ ASTListExpression.php
   │           │     │  │  ├─ ASTLiteral.php
   │           │     │  │  ├─ ASTLogicalAndExpression.php
   │           │     │  │  ├─ ASTLogicalOrExpression.php
   │           │     │  │  ├─ ASTLogicalXorExpression.php
   │           │     │  │  ├─ ASTMatchArgument.php
   │           │     │  │  ├─ ASTMatchBlock.php
   │           │     │  │  ├─ ASTMatchEntry.php
   │           │     │  │  ├─ ASTMemberPrimaryPrefix.php
   │           │     │  │  ├─ ASTMethod.php
   │           │     │  │  ├─ ASTMethodPostfix.php
   │           │     │  │  ├─ ASTNamedArgument.php
   │           │     │  │  ├─ ASTNamespace.php
   │           │     │  │  ├─ ASTNode.php
   │           │     │  │  ├─ ASTParameter.php
   │           │     │  │  ├─ ASTParentReference.php
   │           │     │  │  ├─ ASTPostfixExpression.php
   │           │     │  │  ├─ ASTPreDecrementExpression.php
   │           │     │  │  ├─ ASTPreIncrementExpression.php
   │           │     │  │  ├─ ASTPrintExpression.php
   │           │     │  │  ├─ ASTProperty.php
   │           │     │  │  ├─ ASTPropertyPostfix.php
   │           │     │  │  ├─ ASTRequireExpression.php
   │           │     │  │  ├─ ASTReturnStatement.php
   │           │     │  │  ├─ ASTScalarType.php
   │           │     │  │  ├─ ASTScope.php
   │           │     │  │  ├─ ASTScopeStatement.php
   │           │     │  │  ├─ ASTSelfReference.php
   │           │     │  │  ├─ ASTShiftLeftExpression.php
   │           │     │  │  ├─ ASTShiftRightExpression.php
   │           │     │  │  ├─ ASTStatement.php
   │           │     │  │  ├─ ASTStaticReference.php
   │           │     │  │  ├─ ASTStaticVariableDeclaration.php
   │           │     │  │  ├─ ASTString.php
   │           │     │  │  ├─ ASTStringIndexExpression.php
   │           │     │  │  ├─ ASTSwitchLabel.php
   │           │     │  │  ├─ ASTSwitchStatement.php
   │           │     │  │  ├─ ASTThrowStatement.php
   │           │     │  │  ├─ ASTTrait.php
   │           │     │  │  ├─ ASTTraitAdaptation.php
   │           │     │  │  ├─ ASTTraitAdaptationAlias.php
   │           │     │  │  ├─ ASTTraitAdaptationPrecedence.php
   │           │     │  │  ├─ ASTTraitMethodCollisionException.php
   │           │     │  │  ├─ ASTTraitReference.php
   │           │     │  │  ├─ ASTTraitUseStatement.php
   │           │     │  │  ├─ ASTTryStatement.php
   │           │     │  │  ├─ ASTType.php
   │           │     │  │  ├─ ASTTypeArray.php
   │           │     │  │  ├─ ASTTypeCallable.php
   │           │     │  │  ├─ ASTTypeIterable.php
   │           │     │  │  ├─ ASTUnaryExpression.php
   │           │     │  │  ├─ ASTUnionType.php
   │           │     │  │  ├─ ASTUnsetStatement.php
   │           │     │  │  ├─ ASTValue.php
   │           │     │  │  ├─ ASTVariable.php
   │           │     │  │  ├─ ASTVariableDeclarator.php
   │           │     │  │  ├─ ASTVariableVariable.php
   │           │     │  │  ├─ ASTWhileStatement.php
   │           │     │  │  ├─ ASTYieldStatement.php
   │           │     │  │  ├─ AbstractASTArtifact.php
   │           │     │  │  ├─ AbstractASTCallable.php
   │           │     │  │  ├─ AbstractASTClassOrInterface.php
   │           │     │  │  ├─ AbstractASTCombinationType.php
   │           │     │  │  ├─ AbstractASTNode.php
   │           │     │  │  ├─ AbstractASTType.php
   │           │     │  │  └─ State.php
   │           │     │  ├─ ASTVisitor
   │           │     │  │  ├─ ASTVisitListener.php
   │           │     │  │  ├─ ASTVisitor.php
   │           │     │  │  ├─ AbstractASTVisitListener.php
   │           │     │  │  └─ AbstractASTVisitor.php
   │           │     │  ├─ Builder
   │           │     │  │  ├─ Builder.php
   │           │     │  │  ├─ BuilderContext
   │           │     │  │  │  └─ GlobalBuilderContext.php
   │           │     │  │  └─ BuilderContext.php
   │           │     │  ├─ Language
   │           │     │  │  └─ PHP
   │           │     │  │     ├─ AbstractPHPParser.php
   │           │     │  │     ├─ PHPBuilder.php
   │           │     │  │     ├─ PHPParserGeneric.php
   │           │     │  │     ├─ PHPParserVersion53.php
   │           │     │  │     ├─ PHPParserVersion54.php
   │           │     │  │     ├─ PHPParserVersion55.php
   │           │     │  │     ├─ PHPParserVersion56.php
   │           │     │  │     ├─ PHPParserVersion70.php
   │           │     │  │     ├─ PHPParserVersion71.php
   │           │     │  │     ├─ PHPParserVersion72.php
   │           │     │  │     ├─ PHPParserVersion73.php
   │           │     │  │     ├─ PHPParserVersion74.php
   │           │     │  │     ├─ PHPParserVersion80.php
   │           │     │  │     ├─ PHPParserVersion81.php
   │           │     │  │     ├─ PHPParserVersion82.php
   │           │     │  │     └─ PHPTokenizerInternal.php
   │           │     │  ├─ Parser
   │           │     │  │  ├─ InvalidStateException.php
   │           │     │  │  ├─ MissingValueException.php
   │           │     │  │  ├─ NoActiveScopeException.php
   │           │     │  │  ├─ ParserException.php
   │           │     │  │  ├─ SymbolTable.php
   │           │     │  │  ├─ TokenException.php
   │           │     │  │  ├─ TokenStack.php
   │           │     │  │  ├─ TokenStreamEndException.php
   │           │     │  │  └─ UnexpectedTokenException.php
   │           │     │  └─ Tokenizer
   │           │     │     ├─ FullTokenizer.php
   │           │     │     ├─ Token.php
   │           │     │     ├─ Tokenizer.php
   │           │     │     └─ Tokens.php
   │           │     ├─ TextUI
   │           │     │  ├─ Command.php
   │           │     │  ├─ ResultPrinter.php
   │           │     │  └─ Runner.php
   │           │     └─ Util
   │           │        ├─ Cache
   │           │        │  ├─ CacheDriver.php
   │           │        │  ├─ CacheFactory.php
   │           │        │  └─ Driver
   │           │        │     ├─ File
   │           │        │     │  ├─ FileCacheDirectory.php
   │           │        │     │  └─ FileCacheGarbageCollector.php
   │           │        │     ├─ FileCacheDriver.php
   │           │        │     └─ MemoryCacheDriver.php
   │           │        ├─ Configuration.php
   │           │        ├─ ConfigurationInstance.php
   │           │        ├─ Coverage
   │           │        │  ├─ CloverReport.php
   │           │        │  ├─ Factory.php
   │           │        │  └─ Report.php
   │           │        ├─ FileUtil.php
   │           │        ├─ IdBuilder.php
   │           │        ├─ ImageConvert.php
   │           │        ├─ Log.php
   │           │        ├─ MathUtil.php
   │           │        ├─ Type.php
   │           │        ├─ Utf8Util.php
   │           │        └─ Workarounds.php
   │           └─ resources
   │              ├─ schema
   │              │  └─ configuration.xsd
   │              └─ services.xml
   ├─ phpmd
   │  └─ phpmd
   │     ├─ .mailmap
   │     ├─ .scrutinizer.yml
   │     ├─ .stickler.yml
   │     ├─ AUTHORS.rst
   │     ├─ CHANGELOG
   │     ├─ LICENSE
   │     ├─ README.rst
   │     ├─ apigen.neon
   │     ├─ build.properties
   │     ├─ composer.json
   │     ├─ phpcs.xml.dist
   │     ├─ setup
   │     └─ src
   │        ├─ bin
   │        │  ├─ phpmd
   │        │  └─ phpmd.bat
   │        ├─ conf
   │        │  └─ phar_bootstrap.stub
   │        └─ main
   │           ├─ php
   │           │  └─ PHPMD
   │           │     ├─ AbstractNode.php
   │           │     ├─ AbstractRenderer.php
   │           │     ├─ AbstractRule.php
   │           │     ├─ AbstractWriter.php
   │           │     ├─ Baseline
   │           │     │  ├─ BaselineFileFinder.php
   │           │     │  ├─ BaselineMode.php
   │           │     │  ├─ BaselineSet.php
   │           │     │  ├─ BaselineSetFactory.php
   │           │     │  ├─ BaselineValidator.php
   │           │     │  └─ ViolationBaseline.php
   │           │     ├─ Exception
   │           │     │  ├─ RuleClassFileNotFoundException.php
   │           │     │  ├─ RuleClassNotFoundException.php
   │           │     │  └─ RuleSetNotFoundException.php
   │           │     ├─ Node
   │           │     │  ├─ ASTNode.php
   │           │     │  ├─ AbstractCallableNode.php
   │           │     │  ├─ AbstractNode.php
   │           │     │  ├─ AbstractTypeNode.php
   │           │     │  ├─ Annotation.php
   │           │     │  ├─ Annotations.php
   │           │     │  ├─ ClassNode.php
   │           │     │  ├─ EnumNode.php
   │           │     │  ├─ FunctionNode.php
   │           │     │  ├─ InterfaceNode.php
   │           │     │  ├─ MethodNode.php
   │           │     │  └─ TraitNode.php
   │           │     ├─ PHPMD.php
   │           │     ├─ Parser.php
   │           │     ├─ ParserFactory.php
   │           │     ├─ ProcessingError.php
   │           │     ├─ Renderer
   │           │     │  ├─ AnsiRenderer.php
   │           │     │  ├─ BaselineRenderer.php
   │           │     │  ├─ CheckStyleRenderer.php
   │           │     │  ├─ GitHubRenderer.php
   │           │     │  ├─ GitLabRenderer.php
   │           │     │  ├─ HTMLRenderer.php
   │           │     │  ├─ JSONRenderer.php
   │           │     │  ├─ RendererFactory.php
   │           │     │  ├─ SARIFRenderer.php
   │           │     │  ├─ TextRenderer.php
   │           │     │  └─ XMLRenderer.php
   │           │     ├─ Report.php
   │           │     ├─ Rule
   │           │     │  ├─ AbstractLocalVariable.php
   │           │     │  ├─ ClassAware.php
   │           │     │  ├─ CleanCode
   │           │     │  │  ├─ BooleanArgumentFlag.php
   │           │     │  │  ├─ DuplicatedArrayKey.php
   │           │     │  │  ├─ ElseExpression.php
   │           │     │  │  ├─ ErrorControlOperator.php
   │           │     │  │  ├─ IfStatementAssignment.php
   │           │     │  │  ├─ MissingImport.php
   │           │     │  │  ├─ StaticAccess.php
   │           │     │  │  └─ UndefinedVariable.php
   │           │     │  ├─ Controversial
   │           │     │  │  ├─ CamelCaseClassName.php
   │           │     │  │  ├─ CamelCaseMethodName.php
   │           │     │  │  ├─ CamelCaseParameterName.php
   │           │     │  │  ├─ CamelCasePropertyName.php
   │           │     │  │  ├─ CamelCaseVariableName.php
   │           │     │  │  └─ Superglobals.php
   │           │     │  ├─ CyclomaticComplexity.php
   │           │     │  ├─ Design
   │           │     │  │  ├─ CountInLoopExpression.php
   │           │     │  │  ├─ CouplingBetweenObjects.php
   │           │     │  │  ├─ DepthOfInheritance.php
   │           │     │  │  ├─ DevelopmentCodeFragment.php
   │           │     │  │  ├─ EmptyCatchBlock.php
   │           │     │  │  ├─ EvalExpression.php
   │           │     │  │  ├─ ExitExpression.php
   │           │     │  │  ├─ GotoStatement.php
   │           │     │  │  ├─ LongClass.php
   │           │     │  │  ├─ LongMethod.php
   │           │     │  │  ├─ LongParameterList.php
   │           │     │  │  ├─ NpathComplexity.php
   │           │     │  │  ├─ NumberOfChildren.php
   │           │     │  │  ├─ TooManyFields.php
   │           │     │  │  ├─ TooManyMethods.php
   │           │     │  │  ├─ TooManyPublicMethods.php
   │           │     │  │  └─ WeightedMethodCount.php
   │           │     │  ├─ EnumAware.php
   │           │     │  ├─ ExcessivePublicCount.php
   │           │     │  ├─ FunctionAware.php
   │           │     │  ├─ InterfaceAware.php
   │           │     │  ├─ MethodAware.php
   │           │     │  ├─ Naming
   │           │     │  │  ├─ BooleanGetMethodName.php
   │           │     │  │  ├─ ConstantNamingConventions.php
   │           │     │  │  ├─ ConstructorWithNameAsEnclosingClass.php
   │           │     │  │  ├─ LongClassName.php
   │           │     │  │  ├─ LongVariable.php
   │           │     │  │  ├─ ShortClassName.php
   │           │     │  │  ├─ ShortMethodName.php
   │           │     │  │  └─ ShortVariable.php
   │           │     │  ├─ TraitAware.php
   │           │     │  ├─ UnusedFormalParameter.php
   │           │     │  ├─ UnusedLocalVariable.php
   │           │     │  ├─ UnusedPrivateField.php
   │           │     │  └─ UnusedPrivateMethod.php
   │           │     ├─ Rule.php
   │           │     ├─ RuleClassFileNotFoundException.php
   │           │     ├─ RuleClassNotFoundException.php
   │           │     ├─ RuleSet.php
   │           │     ├─ RuleSetFactory.php
   │           │     ├─ RuleSetNotFoundException.php
   │           │     ├─ RuleViolation.php
   │           │     ├─ TextUI
   │           │     │  ├─ Command.php
   │           │     │  └─ CommandLineOptions.php
   │           │     ├─ Utility
   │           │     │  ├─ Paths.php
   │           │     │  └─ Strings.php
   │           │     └─ Writer
   │           │        └─ StreamWriter.php
   │           └─ resources
   │              └─ rulesets
   │                 ├─ cleancode.xml
   │                 ├─ codesize.xml
   │                 ├─ controversial.xml
   │                 ├─ design.xml
   │                 ├─ naming.xml
   │                 └─ unusedcode.xml
   ├─ phpro
   │  └─ grumphp
   │     ├─ .editorconfig
   │     ├─ .phpspec
   │     │  └─ specification.tpl
   │     ├─ CONTRIBUTING.md
   │     ├─ LICENSE
   │     ├─ Makefile
   │     ├─ README.md
   │     ├─ appveyor.yml
   │     ├─ bin
   │     │  └─ grumphp
   │     ├─ composer.json
   │     ├─ doc
   │     │  ├─ commands.md
   │     │  ├─ conventions.md
   │     │  ├─ extensions.md
   │     │  ├─ faq.md
   │     │  ├─ installation
   │     │  │  ├─ exotic.md
   │     │  │  └─ global.md
   │     │  ├─ parameters.md
   │     │  ├─ runner.md
   │     │  ├─ tasks
   │     │  │  ├─ ant.md
   │     │  │  ├─ atoum.md
   │     │  │  ├─ behat.md
   │     │  │  ├─ brunch.md
   │     │  │  ├─ clover_coverage.md
   │     │  │  ├─ codeception.md
   │     │  │  ├─ composer.md
   │     │  │  ├─ composer_normalize.md
   │     │  │  ├─ composer_require_checker.md
   │     │  │  ├─ composer_script.md
   │     │  │  ├─ deptrac.md
   │     │  │  ├─ doctrine_orm.md
   │     │  │  ├─ ecs.md
   │     │  │  ├─ eslint.md
   │     │  │  ├─ file_size.md
   │     │  │  ├─ gherkin.md
   │     │  │  ├─ git_blacklist.md
   │     │  │  ├─ git_branch_name.md
   │     │  │  ├─ git_commit_message.md
   │     │  │  ├─ grunt.md
   │     │  │  ├─ gulp.md
   │     │  │  ├─ infection.md
   │     │  │  ├─ jsonlint.md
   │     │  │  ├─ kahlan.md
   │     │  │  ├─ make.md
   │     │  │  ├─ npm_script.md
   │     │  │  ├─ paratest.md
   │     │  │  ├─ pest.md
   │     │  │  ├─ phan.md
   │     │  │  ├─ phing.md
   │     │  │  ├─ php7cc.md
   │     │  │  ├─ phparkitect.md
   │     │  │  ├─ phpcpd.md
   │     │  │  ├─ phpcs.md
   │     │  │  ├─ phpcsfixer.md
   │     │  │  ├─ phplint.md
   │     │  │  ├─ phpmd.md
   │     │  │  ├─ phpmnd.md
   │     │  │  ├─ phpparser.md
   │     │  │  ├─ phpspec.md
   │     │  │  ├─ phpstan.md
   │     │  │  ├─ phpunit.md
   │     │  │  ├─ phpunitbridge.md
   │     │  │  ├─ phpversion.md
   │     │  │  ├─ progpilot.md
   │     │  │  ├─ psalm.md
   │     │  │  ├─ rector.md
   │     │  │  ├─ robo.md
   │     │  │  ├─ securitychecker
   │     │  │  │  ├─ enlightn.md
   │     │  │  │  ├─ local.md
   │     │  │  │  ├─ roave.md
   │     │  │  │  └─ symfony.md
   │     │  │  ├─ securitychecker.md
   │     │  │  ├─ shell.md
   │     │  │  ├─ stylelint.md
   │     │  │  ├─ tester.md
   │     │  │  ├─ twigcs.md
   │     │  │  ├─ xmllint.md
   │     │  │  └─ yamllint.md
   │     │  ├─ tasks.md
   │     │  └─ testsuites.md
   │     ├─ grumphp.yml.dist
   │     ├─ phpspec.yml
   │     ├─ phpunit.xml.dist
   │     ├─ psalm.xml
   │     ├─ resources
   │     │  ├─ ascii
   │     │  │  ├─ failed.txt
   │     │  │  ├─ grumphp-grumpy.txt
   │     │  │  ├─ grumphp-happy.txt
   │     │  │  ├─ me-gusta.txt
   │     │  │  ├─ nopecat.txt
   │     │  │  └─ succeeded.txt
   │     │  ├─ config
   │     │  │  ├─ config.yml
   │     │  │  ├─ console.yml
   │     │  │  ├─ fixer.yml
   │     │  │  ├─ formatter.yml
   │     │  │  ├─ linters.yml
   │     │  │  ├─ locators.yml
   │     │  │  ├─ parsers.yml
   │     │  │  ├─ runner.yml
   │     │  │  ├─ services.yml
   │     │  │  ├─ subscribers.yml
   │     │  │  ├─ tasks.yml
   │     │  │  └─ util.yml
   │     │  ├─ hooks
   │     │  │  ├─ local
   │     │  │  │  ├─ commit-msg
   │     │  │  │  └─ pre-commit
   │     │  │  └─ vagrant
   │     │  │     ├─ commit-msg
   │     │  │     └─ pre-commit
   │     │  └─ logo
   │     │     ├─ grumphp-grumpy.png
   │     │     ├─ grumphp-happy.png
   │     │     ├─ simplified-grumpy.png
   │     │     └─ simplified-happy.png
   │     ├─ src
   │     │  ├─ Collection
   │     │  │  ├─ FilesCollection.php
   │     │  │  ├─ LintErrorsCollection.php
   │     │  │  ├─ ParseErrorsCollection.php
   │     │  │  ├─ ProcessArgumentsCollection.php
   │     │  │  ├─ TaskResultCollection.php
   │     │  │  ├─ TasksCollection.php
   │     │  │  └─ TestSuiteCollection.php
   │     │  ├─ Composer
   │     │  │  ├─ DevelopmentIntegrator.php
   │     │  │  └─ GrumPHPPlugin.php
   │     │  ├─ Configuration
   │     │  │  ├─ Compiler
   │     │  │  │  ├─ ExtensionCompilerPass.php
   │     │  │  │  ├─ PhpParserCompilerPass.php
   │     │  │  │  ├─ RegisterListenersPass.php
   │     │  │  │  ├─ TaskCompilerPass.php
   │     │  │  │  └─ TestSuiteCompilerPass.php
   │     │  │  ├─ Configuration.php
   │     │  │  ├─ Configurator
   │     │  │  │  └─ TaskConfigurator.php
   │     │  │  ├─ ContainerBuilder.php
   │     │  │  ├─ ContainerFactory.php
   │     │  │  ├─ Environment
   │     │  │  │  ├─ DotEnvRegistrar.php
   │     │  │  │  ├─ DotEnvSerializer.php
   │     │  │  │  └─ PathsRegistrar.php
   │     │  │  ├─ GrumPHPExtension.php
   │     │  │  ├─ GuessedPaths.php
   │     │  │  ├─ Model
   │     │  │  │  ├─ AsciiConfig.php
   │     │  │  │  ├─ EnvConfig.php
   │     │  │  │  ├─ FixerConfig.php
   │     │  │  │  ├─ GitStashConfig.php
   │     │  │  │  ├─ HooksConfig.php
   │     │  │  │  ├─ ParallelConfig.php
   │     │  │  │  ├─ ProcessConfig.php
   │     │  │  │  └─ RunnerConfig.php
   │     │  │  └─ Resolver
   │     │  │     └─ TaskConfigResolver.php
   │     │  ├─ Console
   │     │  │  ├─ ApplicationConfigurator.php
   │     │  │  └─ Command
   │     │  │     ├─ ConfigureCommand.php
   │     │  │     ├─ Git
   │     │  │     │  ├─ CommitMsgCommand.php
   │     │  │     │  ├─ DeInitCommand.php
   │     │  │     │  ├─ InitCommand.php
   │     │  │     │  └─ PreCommitCommand.php
   │     │  │     └─ RunCommand.php
   │     │  ├─ Event
   │     │  │  ├─ Dispatcher
   │     │  │  │  ├─ Bridge
   │     │  │  │  │  └─ SymfonyEventDispatcher.php
   │     │  │  │  └─ EventDispatcherInterface.php
   │     │  │  ├─ Event.php
   │     │  │  ├─ RunnerEvent.php
   │     │  │  ├─ RunnerEvents.php
   │     │  │  ├─ RunnerFailedEvent.php
   │     │  │  ├─ Subscriber
   │     │  │  │  ├─ StashUnstagedChangesSubscriber.php
   │     │  │  │  └─ VerboseLoggerSubscriber.php
   │     │  │  ├─ TaskEvent.php
   │     │  │  ├─ TaskEvents.php
   │     │  │  └─ TaskFailedEvent.php
   │     │  ├─ Exception
   │     │  │  ├─ DeprecatedException.php
   │     │  │  ├─ ExceptionInterface.php
   │     │  │  ├─ ExecutableNotFoundException.php
   │     │  │  ├─ FileNotFoundException.php
   │     │  │  ├─ FixerException.php
   │     │  │  ├─ InvalidArgumentException.php
   │     │  │  ├─ ParallelException.php
   │     │  │  ├─ PlatformException.php
   │     │  │  ├─ ProcessException.php
   │     │  │  ├─ RuntimeException.php
   │     │  │  └─ TaskConfigResolverException.php
   │     │  ├─ Extension
   │     │  │  └─ ExtensionInterface.php
   │     │  ├─ Fixer
   │     │  │  ├─ FixResult.php
   │     │  │  ├─ FixerUpper.php
   │     │  │  └─ Provider
   │     │  │     ├─ FixableProcessProvider.php
   │     │  │     └─ FixableProcessResultProvider.php
   │     │  ├─ Formatter
   │     │  │  ├─ GitBlacklistFormatter.php
   │     │  │  ├─ PhpCsFixerFormatter.php
   │     │  │  ├─ PhpcsFormatter.php
   │     │  │  ├─ ProcessFormatterInterface.php
   │     │  │  └─ RawProcessFormatter.php
   │     │  ├─ Git
   │     │  │  └─ GitRepository.php
   │     │  ├─ IO
   │     │  │  ├─ ConsoleIO.php
   │     │  │  └─ IOInterface.php
   │     │  ├─ Linter
   │     │  │  ├─ Json
   │     │  │  │  ├─ JsonLintError.php
   │     │  │  │  └─ JsonLinter.php
   │     │  │  ├─ LintError.php
   │     │  │  ├─ LinterInterface.php
   │     │  │  ├─ Xml
   │     │  │  │  ├─ XmlLintError.php
   │     │  │  │  └─ XmlLinter.php
   │     │  │  └─ Yaml
   │     │  │     ├─ YamlLintError.php
   │     │  │     └─ YamlLinter.php
   │     │  ├─ Locator
   │     │  │  ├─ AsciiLocator.php
   │     │  │  ├─ ChangedFiles.php
   │     │  │  ├─ EnrichedGuessedPathsFromDotEnvLocator.php
   │     │  │  ├─ ExternalCommand.php
   │     │  │  ├─ GitRepositoryDirLocator.php
   │     │  │  ├─ GitRepositoryLocator.php
   │     │  │  ├─ GitWorkingDirLocator.php
   │     │  │  ├─ GuessedPathsLocator.php
   │     │  │  ├─ ListedFiles.php
   │     │  │  ├─ RegisteredFiles.php
   │     │  │  └─ StdInFiles.php
   │     │  ├─ Parser
   │     │  │  ├─ ParseError.php
   │     │  │  ├─ ParserInterface.php
   │     │  │  └─ Php
   │     │  │     ├─ Configurator
   │     │  │     │  └─ TraverserConfigurator.php
   │     │  │     ├─ Container
   │     │  │     │  └─ VisitorContainer.php
   │     │  │     ├─ Context
   │     │  │     │  └─ ParserContext.php
   │     │  │     ├─ Factory
   │     │  │     │  ├─ ParserFactory.php
   │     │  │     │  └─ TraverserFactory.php
   │     │  │     ├─ PhpParser.php
   │     │  │     ├─ PhpParserError.php
   │     │  │     └─ Visitor
   │     │  │        ├─ AbstractVisitor.php
   │     │  │        ├─ ConfigurableVisitorInterface.php
   │     │  │        ├─ ContextAwareVisitorInterface.php
   │     │  │        ├─ DeclareStrictTypesVisitor.php
   │     │  │        ├─ ForbiddenClassMethodCallsVisitor.php
   │     │  │        ├─ ForbiddenFunctionCallsVisitor.php
   │     │  │        ├─ ForbiddenStaticMethodCallsVisitor.php
   │     │  │        ├─ NeverUseElseVisitor.php
   │     │  │        └─ NoExitStatementsVisitor.php
   │     │  ├─ Process
   │     │  │  ├─ InputWritingProcessRunner.php
   │     │  │  ├─ ProcessBuilder.php
   │     │  │  ├─ ProcessFactory.php
   │     │  │  └─ TmpFileUsingProcessRunner.php
   │     │  ├─ Runner
   │     │  │  ├─ Ci
   │     │  │  │  └─ CiDetector.php
   │     │  │  ├─ FixableTaskResult.php
   │     │  │  ├─ MemoizedTaskResultMap.php
   │     │  │  ├─ Middleware
   │     │  │  │  ├─ EventDispatchingRunnerMiddleware.php
   │     │  │  │  ├─ FixCodeMiddleware.php
   │     │  │  │  ├─ GroupByPriorityMiddleware.php
   │     │  │  │  ├─ HandleRunnerMiddleware.php
   │     │  │  │  ├─ ReportingRunnerMiddleware.php
   │     │  │  │  ├─ ReportingTasksSectionRunnerMiddleware.php
   │     │  │  │  ├─ RunnerMiddlewareInterface.php
   │     │  │  │  └─ TasksFilteringRunnerMiddleware.php
   │     │  │  ├─ MiddlewareStack.php
   │     │  │  ├─ Parallel
   │     │  │  │  └─ PoolFactory.php
   │     │  │  ├─ Promise
   │     │  │  │  └─ MultiPromise.php
   │     │  │  ├─ Reporting
   │     │  │  │  ├─ RunnerReporter.php
   │     │  │  │  └─ TaskResultsReporter.php
   │     │  │  ├─ TaskHandler
   │     │  │  │  ├─ Middleware
   │     │  │  │  │  ├─ ErrorHandlingTaskHandlerMiddleware.php
   │     │  │  │  │  ├─ EventDispatchingTaskHandlerMiddleware.php
   │     │  │  │  │  ├─ MemoizedResultsTaskHandlerMiddleware.php
   │     │  │  │  │  ├─ NonBlockingTaskHandlerMiddleware.php
   │     │  │  │  │  ├─ ParallelProcessingMiddleware.php
   │     │  │  │  │  ├─ ReportingTaskHandlerMiddleware.php
   │     │  │  │  │  └─ TaskHandlerMiddlewareInterface.php
   │     │  │  │  └─ TaskHandler.php
   │     │  │  ├─ TaskResult.php
   │     │  │  ├─ TaskResultInterface.php
   │     │  │  ├─ TaskRunner.php
   │     │  │  └─ TaskRunnerContext.php
   │     │  ├─ Task
   │     │  │  ├─ AbstractExternalTask.php
   │     │  │  ├─ AbstractLinterTask.php
   │     │  │  ├─ AbstractParserTask.php
   │     │  │  ├─ Ant.php
   │     │  │  ├─ Atoum.php
   │     │  │  ├─ Behat.php
   │     │  │  ├─ Brunch.php
   │     │  │  ├─ CloverCoverage.php
   │     │  │  ├─ Codeception.php
   │     │  │  ├─ Composer.php
   │     │  │  ├─ ComposerNormalize.php
   │     │  │  ├─ ComposerRequireChecker.php
   │     │  │  ├─ ComposerScript.php
   │     │  │  ├─ Config
   │     │  │  │  ├─ EmptyTaskConfig.php
   │     │  │  │  ├─ LazyTaskConfig.php
   │     │  │  │  ├─ Metadata.php
   │     │  │  │  ├─ TaskConfig.php
   │     │  │  │  └─ TaskConfigInterface.php
   │     │  │  ├─ Context
   │     │  │  │  ├─ ContextInterface.php
   │     │  │  │  ├─ GitCommitMsgContext.php
   │     │  │  │  ├─ GitPreCommitContext.php
   │     │  │  │  └─ RunContext.php
   │     │  │  ├─ Deptrac.php
   │     │  │  ├─ DoctrineOrm.php
   │     │  │  ├─ ESLint.php
   │     │  │  ├─ Ecs.php
   │     │  │  ├─ FileSize.php
   │     │  │  ├─ Gherkin.php
   │     │  │  ├─ Git
   │     │  │  │  ├─ Blacklist.php
   │     │  │  │  ├─ BranchName.php
   │     │  │  │  └─ CommitMessage.php
   │     │  │  ├─ Grunt.php
   │     │  │  ├─ Gulp.php
   │     │  │  ├─ Infection.php
   │     │  │  ├─ JsonLint.php
   │     │  │  ├─ Kahlan.php
   │     │  │  ├─ Make.php
   │     │  │  ├─ NpmScript.php
   │     │  │  ├─ Paratest.php
   │     │  │  ├─ Pest.php
   │     │  │  ├─ Phan.php
   │     │  │  ├─ Phing.php
   │     │  │  ├─ Php7cc.php
   │     │  │  ├─ PhpArkitect.php
   │     │  │  ├─ PhpCpd.php
   │     │  │  ├─ PhpCsFixer.php
   │     │  │  ├─ PhpLint.php
   │     │  │  ├─ PhpMd.php
   │     │  │  ├─ PhpMnd.php
   │     │  │  ├─ PhpParser.php
   │     │  │  ├─ PhpStan.php
   │     │  │  ├─ PhpVersion.php
   │     │  │  ├─ Phpcs.php
   │     │  │  ├─ Phpspec.php
   │     │  │  ├─ Phpunit.php
   │     │  │  ├─ PhpunitBridge.php
   │     │  │  ├─ Progpilot.php
   │     │  │  ├─ Psalm.php
   │     │  │  ├─ Rector.php
   │     │  │  ├─ Robo.php
   │     │  │  ├─ SecurityChecker.php
   │     │  │  ├─ SecurityCheckerEnlightn.php
   │     │  │  ├─ SecurityCheckerLocal.php
   │     │  │  ├─ SecurityCheckerRoave.php
   │     │  │  ├─ SecurityCheckerSymfony.php
   │     │  │  ├─ Shell.php
   │     │  │  ├─ Stylelint.php
   │     │  │  ├─ TaskInterface.php
   │     │  │  ├─ Tester.php
   │     │  │  ├─ TwigCs.php
   │     │  │  ├─ XmlLint.php
   │     │  │  └─ YamlLint.php
   │     │  ├─ Test
   │     │  │  ├─ Runner
   │     │  │  │  ├─ AbstractMiddlewareTestCase.php
   │     │  │  │  ├─ AbstractRunnerMiddlewareTestCase.php
   │     │  │  │  └─ AbstractTaskHandlerMiddlewareTestCase.php
   │     │  │  └─ Task
   │     │  │     ├─ AbstractExternalTaskTestCase.php
   │     │  │     └─ AbstractTaskTestCase.php
   │     │  ├─ TestSuite
   │     │  │  ├─ TestSuite.php
   │     │  │  └─ TestSuiteInterface.php
   │     │  └─ Util
   │     │     ├─ ComposerFile.php
   │     │     ├─ Filesystem.php
   │     │     ├─ Paths.php
   │     │     ├─ PhpVersion.php
   │     │     ├─ Platform.php
   │     │     ├─ Regex.php
   │     │     └─ Str.php
   │     └─ stubs
   │        └─ Amp.php
   ├─ phpstan
   │  └─ phpstan
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ bootstrap.php
   │     ├─ composer.json
   │     ├─ conf
   │     │  └─ bleedingEdge.neon
   │     ├─ phpstan
   │     ├─ phpstan.phar
   │     └─ phpstan.phar.asc
   ├─ psr
   │  ├─ container
   │  │  ├─ .gitignore
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ ContainerExceptionInterface.php
   │  │     ├─ ContainerInterface.php
   │  │     └─ NotFoundExceptionInterface.php
   │  ├─ event-dispatcher
   │  │  ├─ .editorconfig
   │  │  ├─ .gitignore
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ EventDispatcherInterface.php
   │  │     ├─ ListenerProviderInterface.php
   │  │     └─ StoppableEventInterface.php
   │  ├─ http-client
   │  │  ├─ CHANGELOG.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ ClientExceptionInterface.php
   │  │     ├─ ClientInterface.php
   │  │     ├─ NetworkExceptionInterface.php
   │  │     └─ RequestExceptionInterface.php
   │  ├─ http-factory
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ RequestFactoryInterface.php
   │  │     ├─ ResponseFactoryInterface.php
   │  │     ├─ ServerRequestFactoryInterface.php
   │  │     ├─ StreamFactoryInterface.php
   │  │     ├─ UploadedFileFactoryInterface.php
   │  │     └─ UriFactoryInterface.php
   │  ├─ http-message
   │  │  ├─ CHANGELOG.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ composer.json
   │  │  ├─ docs
   │  │  │  ├─ PSR7-Interfaces.md
   │  │  │  └─ PSR7-Usage.md
   │  │  └─ src
   │  │     ├─ MessageInterface.php
   │  │     ├─ RequestInterface.php
   │  │     ├─ ResponseInterface.php
   │  │     ├─ ServerRequestInterface.php
   │  │     ├─ StreamInterface.php
   │  │     ├─ UploadedFileInterface.php
   │  │     └─ UriInterface.php
   │  └─ log
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ composer.json
   │     └─ src
   │        ├─ AbstractLogger.php
   │        ├─ InvalidArgumentException.php
   │        ├─ LogLevel.php
   │        ├─ LoggerAwareInterface.php
   │        ├─ LoggerAwareTrait.php
   │        ├─ LoggerInterface.php
   │        ├─ LoggerTrait.php
   │        └─ NullLogger.php
   ├─ ralouphie
   │  └─ getallheaders
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ composer.json
   │     └─ src
   │        └─ getallheaders.php
   ├─ seld
   │  └─ jsonlint
   │     ├─ CHANGELOG.md
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ bin
   │     │  └─ jsonlint
   │     ├─ composer.json
   │     ├─ phpstan.neon.dist
   │     └─ src
   │        └─ Seld
   │           └─ JsonLint
   │              ├─ DuplicateKeyException.php
   │              ├─ JsonParser.php
   │              ├─ Lexer.php
   │              ├─ ParsingException.php
   │              └─ Undefined.php
   ├─ squizlabs
   │  └─ php_codesniffer
   │     ├─ CONTRIBUTING.md
   │     ├─ CodeSniffer.conf.dist
   │     ├─ README.md
   │     ├─ autoload.php
   │     ├─ bin
   │     │  ├─ phpcbf
   │     │  ├─ phpcbf.bat
   │     │  ├─ phpcs
   │     │  └─ phpcs.bat
   │     ├─ composer.json
   │     ├─ licence.txt
   │     ├─ phpcs.xsd
   │     ├─ src
   │     │  ├─ Config.php
   │     │  ├─ Exceptions
   │     │  │  ├─ DeepExitException.php
   │     │  │  ├─ RuntimeException.php
   │     │  │  └─ TokenizerException.php
   │     │  ├─ Files
   │     │  │  ├─ DummyFile.php
   │     │  │  ├─ File.php
   │     │  │  ├─ FileList.php
   │     │  │  └─ LocalFile.php
   │     │  ├─ Filters
   │     │  │  ├─ ExactMatch.php
   │     │  │  ├─ Filter.php
   │     │  │  ├─ GitModified.php
   │     │  │  └─ GitStaged.php
   │     │  ├─ Fixer.php
   │     │  ├─ Generators
   │     │  │  ├─ Generator.php
   │     │  │  ├─ HTML.php
   │     │  │  ├─ Markdown.php
   │     │  │  └─ Text.php
   │     │  ├─ Reporter.php
   │     │  ├─ Reports
   │     │  │  ├─ Cbf.php
   │     │  │  ├─ Checkstyle.php
   │     │  │  ├─ Code.php
   │     │  │  ├─ Csv.php
   │     │  │  ├─ Diff.php
   │     │  │  ├─ Emacs.php
   │     │  │  ├─ Full.php
   │     │  │  ├─ Gitblame.php
   │     │  │  ├─ Hgblame.php
   │     │  │  ├─ Info.php
   │     │  │  ├─ Json.php
   │     │  │  ├─ Junit.php
   │     │  │  ├─ Notifysend.php
   │     │  │  ├─ Report.php
   │     │  │  ├─ Source.php
   │     │  │  ├─ Summary.php
   │     │  │  ├─ Svnblame.php
   │     │  │  ├─ VersionControl.php
   │     │  │  └─ Xml.php
   │     │  ├─ Ruleset.php
   │     │  ├─ Runner.php
   │     │  ├─ Sniffs
   │     │  │  ├─ AbstractArraySniff.php
   │     │  │  ├─ AbstractPatternSniff.php
   │     │  │  ├─ AbstractScopeSniff.php
   │     │  │  ├─ AbstractVariableSniff.php
   │     │  │  └─ Sniff.php
   │     │  ├─ Standards
   │     │  │  ├─ Generic
   │     │  │  │  ├─ Docs
   │     │  │  │  │  ├─ Arrays
   │     │  │  │  │  │  ├─ DisallowLongArraySyntaxStandard.xml
   │     │  │  │  │  │  └─ DisallowShortArraySyntaxStandard.xml
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  ├─ DuplicateClassNameStandard.xml
   │     │  │  │  │  │  └─ OpeningBraceSameLineStandard.xml
   │     │  │  │  │  ├─ CodeAnalysis
   │     │  │  │  │  │  ├─ AssignmentInConditionStandard.xml
   │     │  │  │  │  │  ├─ EmptyStatementStandard.xml
   │     │  │  │  │  │  ├─ ForLoopShouldBeWhileLoopStandard.xml
   │     │  │  │  │  │  ├─ ForLoopWithTestFunctionCallStandard.xml
   │     │  │  │  │  │  ├─ JumbledIncrementerStandard.xml
   │     │  │  │  │  │  ├─ UnconditionalIfStatementStandard.xml
   │     │  │  │  │  │  ├─ UnnecessaryFinalModifierStandard.xml
   │     │  │  │  │  │  ├─ UnusedFunctionParameterStandard.xml
   │     │  │  │  │  │  └─ UselessOverridingMethodStandard.xml
   │     │  │  │  │  ├─ Commenting
   │     │  │  │  │  │  ├─ FixmeStandard.xml
   │     │  │  │  │  │  └─ TodoStandard.xml
   │     │  │  │  │  ├─ ControlStructures
   │     │  │  │  │  │  ├─ DisallowYodaConditionsStandard.xml
   │     │  │  │  │  │  └─ InlineControlStructureStandard.xml
   │     │  │  │  │  ├─ Debug
   │     │  │  │  │  │  ├─ CSSLintStandard.xml
   │     │  │  │  │  │  ├─ ClosureLinterStandard.xml
   │     │  │  │  │  │  └─ JSHintStandard.xml
   │     │  │  │  │  ├─ Files
   │     │  │  │  │  │  ├─ ByteOrderMarkStandard.xml
   │     │  │  │  │  │  ├─ EndFileNewlineStandard.xml
   │     │  │  │  │  │  ├─ EndFileNoNewlineStandard.xml
   │     │  │  │  │  │  ├─ ExecutableFileStandard.xml
   │     │  │  │  │  │  ├─ InlineHTMLStandard.xml
   │     │  │  │  │  │  ├─ LineEndingsStandard.xml
   │     │  │  │  │  │  ├─ LineLengthStandard.xml
   │     │  │  │  │  │  ├─ LowercasedFilenameStandard.xml
   │     │  │  │  │  │  ├─ OneClassPerFileStandard.xml
   │     │  │  │  │  │  ├─ OneInterfacePerFileStandard.xml
   │     │  │  │  │  │  ├─ OneObjectStructurePerFileStandard.xml
   │     │  │  │  │  │  └─ OneTraitPerFileStandard.xml
   │     │  │  │  │  ├─ Formatting
   │     │  │  │  │  │  ├─ DisallowMultipleStatementsStandard.xml
   │     │  │  │  │  │  ├─ MultipleStatementAlignmentStandard.xml
   │     │  │  │  │  │  ├─ NoSpaceAfterCastStandard.xml
   │     │  │  │  │  │  ├─ SpaceAfterCastStandard.xml
   │     │  │  │  │  │  └─ SpaceAfterNotStandard.xml
   │     │  │  │  │  ├─ Functions
   │     │  │  │  │  │  ├─ CallTimePassByReferenceStandard.xml
   │     │  │  │  │  │  ├─ FunctionCallArgumentSpacingStandard.xml
   │     │  │  │  │  │  ├─ OpeningFunctionBraceBsdAllmanStandard.xml
   │     │  │  │  │  │  └─ OpeningFunctionBraceKernighanRitchieStandard.xml
   │     │  │  │  │  ├─ Metrics
   │     │  │  │  │  │  ├─ CyclomaticComplexityStandard.xml
   │     │  │  │  │  │  └─ NestingLevelStandard.xml
   │     │  │  │  │  ├─ NamingConventions
   │     │  │  │  │  │  ├─ AbstractClassNamePrefixStandard.xml
   │     │  │  │  │  │  ├─ CamelCapsFunctionNameStandard.xml
   │     │  │  │  │  │  ├─ ConstructorNameStandard.xml
   │     │  │  │  │  │  ├─ InterfaceNameSuffixStandard.xml
   │     │  │  │  │  │  ├─ TraitNameSuffixStandard.xml
   │     │  │  │  │  │  └─ UpperCaseConstantNameStandard.xml
   │     │  │  │  │  ├─ PHP
   │     │  │  │  │  │  ├─ BacktickOperatorStandard.xml
   │     │  │  │  │  │  ├─ CharacterBeforePHPOpeningTagStandard.xml
   │     │  │  │  │  │  ├─ ClosingPHPTagStandard.xml
   │     │  │  │  │  │  ├─ DeprecatedFunctionsStandard.xml
   │     │  │  │  │  │  ├─ DisallowAlternativePHPTagsStandard.xml
   │     │  │  │  │  │  ├─ DisallowRequestSuperglobalStandard.xml
   │     │  │  │  │  │  ├─ DisallowShortOpenTagStandard.xml
   │     │  │  │  │  │  ├─ DiscourageGotoStandard.xml
   │     │  │  │  │  │  ├─ ForbiddenFunctionsStandard.xml
   │     │  │  │  │  │  ├─ LowerCaseConstantStandard.xml
   │     │  │  │  │  │  ├─ LowerCaseKeywordStandard.xml
   │     │  │  │  │  │  ├─ LowerCaseTypeStandard.xml
   │     │  │  │  │  │  ├─ NoSilencedErrorsStandard.xml
   │     │  │  │  │  │  ├─ SAPIUsageStandard.xml
   │     │  │  │  │  │  └─ UpperCaseConstantStandard.xml
   │     │  │  │  │  ├─ Strings
   │     │  │  │  │  │  └─ UnnecessaryStringConcatStandard.xml
   │     │  │  │  │  ├─ VersionControl
   │     │  │  │  │  │  └─ SubversionPropertiesStandard.xml
   │     │  │  │  │  └─ WhiteSpace
   │     │  │  │  │     ├─ ArbitraryParenthesesSpacingStandard.xml
   │     │  │  │  │     ├─ DisallowSpaceIndentStandard.xml
   │     │  │  │  │     ├─ DisallowTabIndentStandard.xml
   │     │  │  │  │     ├─ ScopeIndentStandard.xml
   │     │  │  │  │     └─ SpreadOperatorSpacingAfterStandard.xml
   │     │  │  │  ├─ Sniffs
   │     │  │  │  │  ├─ Arrays
   │     │  │  │  │  │  ├─ ArrayIndentSniff.php
   │     │  │  │  │  │  ├─ DisallowLongArraySyntaxSniff.php
   │     │  │  │  │  │  └─ DisallowShortArraySyntaxSniff.php
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  ├─ DuplicateClassNameSniff.php
   │     │  │  │  │  │  └─ OpeningBraceSameLineSniff.php
   │     │  │  │  │  ├─ CodeAnalysis
   │     │  │  │  │  │  ├─ AssignmentInConditionSniff.php
   │     │  │  │  │  │  ├─ EmptyPHPStatementSniff.php
   │     │  │  │  │  │  ├─ EmptyStatementSniff.php
   │     │  │  │  │  │  ├─ ForLoopShouldBeWhileLoopSniff.php
   │     │  │  │  │  │  ├─ ForLoopWithTestFunctionCallSniff.php
   │     │  │  │  │  │  ├─ JumbledIncrementerSniff.php
   │     │  │  │  │  │  ├─ UnconditionalIfStatementSniff.php
   │     │  │  │  │  │  ├─ UnnecessaryFinalModifierSniff.php
   │     │  │  │  │  │  ├─ UnusedFunctionParameterSniff.php
   │     │  │  │  │  │  └─ UselessOverridingMethodSniff.php
   │     │  │  │  │  ├─ Commenting
   │     │  │  │  │  │  ├─ DocCommentSniff.php
   │     │  │  │  │  │  ├─ FixmeSniff.php
   │     │  │  │  │  │  └─ TodoSniff.php
   │     │  │  │  │  ├─ ControlStructures
   │     │  │  │  │  │  ├─ DisallowYodaConditionsSniff.php
   │     │  │  │  │  │  └─ InlineControlStructureSniff.php
   │     │  │  │  │  ├─ Debug
   │     │  │  │  │  │  ├─ CSSLintSniff.php
   │     │  │  │  │  │  ├─ ClosureLinterSniff.php
   │     │  │  │  │  │  ├─ ESLintSniff.php
   │     │  │  │  │  │  └─ JSHintSniff.php
   │     │  │  │  │  ├─ Files
   │     │  │  │  │  │  ├─ ByteOrderMarkSniff.php
   │     │  │  │  │  │  ├─ EndFileNewlineSniff.php
   │     │  │  │  │  │  ├─ EndFileNoNewlineSniff.php
   │     │  │  │  │  │  ├─ ExecutableFileSniff.php
   │     │  │  │  │  │  ├─ InlineHTMLSniff.php
   │     │  │  │  │  │  ├─ LineEndingsSniff.php
   │     │  │  │  │  │  ├─ LineLengthSniff.php
   │     │  │  │  │  │  ├─ LowercasedFilenameSniff.php
   │     │  │  │  │  │  ├─ OneClassPerFileSniff.php
   │     │  │  │  │  │  ├─ OneInterfacePerFileSniff.php
   │     │  │  │  │  │  ├─ OneObjectStructurePerFileSniff.php
   │     │  │  │  │  │  └─ OneTraitPerFileSniff.php
   │     │  │  │  │  ├─ Formatting
   │     │  │  │  │  │  ├─ DisallowMultipleStatementsSniff.php
   │     │  │  │  │  │  ├─ MultipleStatementAlignmentSniff.php
   │     │  │  │  │  │  ├─ NoSpaceAfterCastSniff.php
   │     │  │  │  │  │  ├─ SpaceAfterCastSniff.php
   │     │  │  │  │  │  ├─ SpaceAfterNotSniff.php
   │     │  │  │  │  │  └─ SpaceBeforeCastSniff.php
   │     │  │  │  │  ├─ Functions
   │     │  │  │  │  │  ├─ CallTimePassByReferenceSniff.php
   │     │  │  │  │  │  ├─ FunctionCallArgumentSpacingSniff.php
   │     │  │  │  │  │  ├─ OpeningFunctionBraceBsdAllmanSniff.php
   │     │  │  │  │  │  └─ OpeningFunctionBraceKernighanRitchieSniff.php
   │     │  │  │  │  ├─ Metrics
   │     │  │  │  │  │  ├─ CyclomaticComplexitySniff.php
   │     │  │  │  │  │  └─ NestingLevelSniff.php
   │     │  │  │  │  ├─ NamingConventions
   │     │  │  │  │  │  ├─ AbstractClassNamePrefixSniff.php
   │     │  │  │  │  │  ├─ CamelCapsFunctionNameSniff.php
   │     │  │  │  │  │  ├─ ConstructorNameSniff.php
   │     │  │  │  │  │  ├─ InterfaceNameSuffixSniff.php
   │     │  │  │  │  │  ├─ TraitNameSuffixSniff.php
   │     │  │  │  │  │  └─ UpperCaseConstantNameSniff.php
   │     │  │  │  │  ├─ PHP
   │     │  │  │  │  │  ├─ BacktickOperatorSniff.php
   │     │  │  │  │  │  ├─ CharacterBeforePHPOpeningTagSniff.php
   │     │  │  │  │  │  ├─ ClosingPHPTagSniff.php
   │     │  │  │  │  │  ├─ DeprecatedFunctionsSniff.php
   │     │  │  │  │  │  ├─ DisallowAlternativePHPTagsSniff.php
   │     │  │  │  │  │  ├─ DisallowRequestSuperglobalSniff.php
   │     │  │  │  │  │  ├─ DisallowShortOpenTagSniff.php
   │     │  │  │  │  │  ├─ DiscourageGotoSniff.php
   │     │  │  │  │  │  ├─ ForbiddenFunctionsSniff.php
   │     │  │  │  │  │  ├─ LowerCaseConstantSniff.php
   │     │  │  │  │  │  ├─ LowerCaseKeywordSniff.php
   │     │  │  │  │  │  ├─ LowerCaseTypeSniff.php
   │     │  │  │  │  │  ├─ NoSilencedErrorsSniff.php
   │     │  │  │  │  │  ├─ RequireStrictTypesSniff.php
   │     │  │  │  │  │  ├─ SAPIUsageSniff.php
   │     │  │  │  │  │  ├─ SyntaxSniff.php
   │     │  │  │  │  │  └─ UpperCaseConstantSniff.php
   │     │  │  │  │  ├─ Strings
   │     │  │  │  │  │  └─ UnnecessaryStringConcatSniff.php
   │     │  │  │  │  ├─ VersionControl
   │     │  │  │  │  │  ├─ GitMergeConflictSniff.php
   │     │  │  │  │  │  └─ SubversionPropertiesSniff.php
   │     │  │  │  │  └─ WhiteSpace
   │     │  │  │  │     ├─ ArbitraryParenthesesSpacingSniff.php
   │     │  │  │  │     ├─ DisallowSpaceIndentSniff.php
   │     │  │  │  │     ├─ DisallowTabIndentSniff.php
   │     │  │  │  │     ├─ IncrementDecrementSpacingSniff.php
   │     │  │  │  │     ├─ LanguageConstructSpacingSniff.php
   │     │  │  │  │     ├─ ScopeIndentSniff.php
   │     │  │  │  │     └─ SpreadOperatorSpacingAfterSniff.php
   │     │  │  │  ├─ Tests
   │     │  │  │  │  ├─ Arrays
   │     │  │  │  │  │  ├─ ArrayIndentUnitTest.inc
   │     │  │  │  │  │  ├─ ArrayIndentUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ ArrayIndentUnitTest.php
   │     │  │  │  │  │  ├─ DisallowLongArraySyntaxUnitTest.1.inc
   │     │  │  │  │  │  ├─ DisallowLongArraySyntaxUnitTest.1.inc.fixed
   │     │  │  │  │  │  ├─ DisallowLongArraySyntaxUnitTest.2.inc
   │     │  │  │  │  │  ├─ DisallowLongArraySyntaxUnitTest.2.inc.fixed
   │     │  │  │  │  │  ├─ DisallowLongArraySyntaxUnitTest.php
   │     │  │  │  │  │  ├─ DisallowShortArraySyntaxUnitTest.inc
   │     │  │  │  │  │  ├─ DisallowShortArraySyntaxUnitTest.inc.fixed
   │     │  │  │  │  │  └─ DisallowShortArraySyntaxUnitTest.php
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  ├─ DuplicateClassNameUnitTest.1.inc
   │     │  │  │  │  │  ├─ DuplicateClassNameUnitTest.2.inc
   │     │  │  │  │  │  ├─ DuplicateClassNameUnitTest.3.inc
   │     │  │  │  │  │  ├─ DuplicateClassNameUnitTest.4.inc
   │     │  │  │  │  │  ├─ DuplicateClassNameUnitTest.5.inc
   │     │  │  │  │  │  ├─ DuplicateClassNameUnitTest.6.inc
   │     │  │  │  │  │  ├─ DuplicateClassNameUnitTest.php
   │     │  │  │  │  │  ├─ OpeningBraceSameLineUnitTest.inc
   │     │  │  │  │  │  ├─ OpeningBraceSameLineUnitTest.inc.fixed
   │     │  │  │  │  │  └─ OpeningBraceSameLineUnitTest.php
   │     │  │  │  │  ├─ CodeAnalysis
   │     │  │  │  │  │  ├─ AssignmentInConditionUnitTest.inc
   │     │  │  │  │  │  ├─ AssignmentInConditionUnitTest.php
   │     │  │  │  │  │  ├─ EmptyPHPStatementUnitTest.inc
   │     │  │  │  │  │  ├─ EmptyPHPStatementUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ EmptyPHPStatementUnitTest.php
   │     │  │  │  │  │  ├─ EmptyStatementUnitTest.inc
   │     │  │  │  │  │  ├─ EmptyStatementUnitTest.php
   │     │  │  │  │  │  ├─ ForLoopShouldBeWhileLoopUnitTest.inc
   │     │  │  │  │  │  ├─ ForLoopShouldBeWhileLoopUnitTest.php
   │     │  │  │  │  │  ├─ ForLoopWithTestFunctionCallUnitTest.inc
   │     │  │  │  │  │  ├─ ForLoopWithTestFunctionCallUnitTest.php
   │     │  │  │  │  │  ├─ JumbledIncrementerUnitTest.inc
   │     │  │  │  │  │  ├─ JumbledIncrementerUnitTest.php
   │     │  │  │  │  │  ├─ UnconditionalIfStatementUnitTest.inc
   │     │  │  │  │  │  ├─ UnconditionalIfStatementUnitTest.php
   │     │  │  │  │  │  ├─ UnnecessaryFinalModifierUnitTest.inc
   │     │  │  │  │  │  ├─ UnnecessaryFinalModifierUnitTest.php
   │     │  │  │  │  │  ├─ UnusedFunctionParameterUnitTest.inc
   │     │  │  │  │  │  ├─ UnusedFunctionParameterUnitTest.php
   │     │  │  │  │  │  ├─ UselessOverridingMethodUnitTest.inc
   │     │  │  │  │  │  └─ UselessOverridingMethodUnitTest.php
   │     │  │  │  │  ├─ Commenting
   │     │  │  │  │  │  ├─ DocCommentUnitTest.inc
   │     │  │  │  │  │  ├─ DocCommentUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ DocCommentUnitTest.js
   │     │  │  │  │  │  ├─ DocCommentUnitTest.js.fixed
   │     │  │  │  │  │  ├─ DocCommentUnitTest.php
   │     │  │  │  │  │  ├─ FixmeUnitTest.inc
   │     │  │  │  │  │  ├─ FixmeUnitTest.js
   │     │  │  │  │  │  ├─ FixmeUnitTest.php
   │     │  │  │  │  │  ├─ TodoUnitTest.inc
   │     │  │  │  │  │  ├─ TodoUnitTest.js
   │     │  │  │  │  │  └─ TodoUnitTest.php
   │     │  │  │  │  ├─ ControlStructures
   │     │  │  │  │  │  ├─ DisallowYodaConditionsUnitTest.inc
   │     │  │  │  │  │  ├─ DisallowYodaConditionsUnitTest.php
   │     │  │  │  │  │  ├─ InlineControlStructureUnitTest.1.inc
   │     │  │  │  │  │  ├─ InlineControlStructureUnitTest.1.inc.fixed
   │     │  │  │  │  │  ├─ InlineControlStructureUnitTest.2.inc
   │     │  │  │  │  │  ├─ InlineControlStructureUnitTest.3.inc
   │     │  │  │  │  │  ├─ InlineControlStructureUnitTest.4.inc
   │     │  │  │  │  │  ├─ InlineControlStructureUnitTest.5.inc
   │     │  │  │  │  │  ├─ InlineControlStructureUnitTest.6.inc
   │     │  │  │  │  │  ├─ InlineControlStructureUnitTest.7.inc
   │     │  │  │  │  │  ├─ InlineControlStructureUnitTest.js
   │     │  │  │  │  │  ├─ InlineControlStructureUnitTest.js.fixed
   │     │  │  │  │  │  └─ InlineControlStructureUnitTest.php
   │     │  │  │  │  ├─ Debug
   │     │  │  │  │  │  ├─ CSSLintUnitTest.css
   │     │  │  │  │  │  ├─ CSSLintUnitTest.php
   │     │  │  │  │  │  ├─ ClosureLinterUnitTest.js
   │     │  │  │  │  │  ├─ ClosureLinterUnitTest.php
   │     │  │  │  │  │  ├─ ESLintUnitTest.js
   │     │  │  │  │  │  ├─ ESLintUnitTest.php
   │     │  │  │  │  │  ├─ JSHintUnitTest.js
   │     │  │  │  │  │  └─ JSHintUnitTest.php
   │     │  │  │  │  ├─ Files
   │     │  │  │  │  │  ├─ ByteOrderMarkUnitTest.inc
   │     │  │  │  │  │  ├─ ByteOrderMarkUnitTest.php
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.1.css
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.1.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.1.js
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.2.css
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.2.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.2.js
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.3.css
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.3.css.fixed
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.3.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.3.inc.fixed
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.3.js
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.3.js.fixed
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.4.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.4.inc.fixed
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.5.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.6.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.6.inc.fixed
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.7.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.7.inc.fixed
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.8.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.php
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.1.css
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.1.css.fixed
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.1.inc
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.1.inc.fixed
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.1.js
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.1.js.fixed
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.10.inc
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.2.css
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.2.css.fixed
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.2.inc
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.2.inc.fixed
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.2.js
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.2.js.fixed
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.3.css
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.3.inc
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.3.js
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.4.inc
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.5.inc
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.6.inc
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.6.inc.fixed
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.7.inc
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.8.inc
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.8.inc.fixed
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.9.inc
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.9.inc.fixed
   │     │  │  │  │  │  ├─ EndFileNoNewlineUnitTest.php
   │     │  │  │  │  │  ├─ ExecutableFileUnitTest.1.inc
   │     │  │  │  │  │  ├─ ExecutableFileUnitTest.2.inc
   │     │  │  │  │  │  ├─ ExecutableFileUnitTest.3.inc
   │     │  │  │  │  │  ├─ ExecutableFileUnitTest.4.inc
   │     │  │  │  │  │  ├─ ExecutableFileUnitTest.php
   │     │  │  │  │  │  ├─ InlineHTMLUnitTest.1.inc
   │     │  │  │  │  │  ├─ InlineHTMLUnitTest.2.inc
   │     │  │  │  │  │  ├─ InlineHTMLUnitTest.3.inc
   │     │  │  │  │  │  ├─ InlineHTMLUnitTest.4.inc
   │     │  │  │  │  │  ├─ InlineHTMLUnitTest.5.inc
   │     │  │  │  │  │  ├─ InlineHTMLUnitTest.6.inc
   │     │  │  │  │  │  ├─ InlineHTMLUnitTest.7.inc
   │     │  │  │  │  │  ├─ InlineHTMLUnitTest.php
   │     │  │  │  │  │  ├─ LineEndingsUnitTest.1.inc
   │     │  │  │  │  │  ├─ LineEndingsUnitTest.1.inc.fixed
   │     │  │  │  │  │  ├─ LineEndingsUnitTest.2.inc
   │     │  │  │  │  │  ├─ LineEndingsUnitTest.2.inc.fixed
   │     │  │  │  │  │  ├─ LineEndingsUnitTest.css
   │     │  │  │  │  │  ├─ LineEndingsUnitTest.css.fixed
   │     │  │  │  │  │  ├─ LineEndingsUnitTest.js
   │     │  │  │  │  │  ├─ LineEndingsUnitTest.js.fixed
   │     │  │  │  │  │  ├─ LineEndingsUnitTest.php
   │     │  │  │  │  │  ├─ LineLengthUnitTest.1.inc
   │     │  │  │  │  │  ├─ LineLengthUnitTest.2.inc
   │     │  │  │  │  │  ├─ LineLengthUnitTest.3.inc
   │     │  │  │  │  │  ├─ LineLengthUnitTest.4.inc
   │     │  │  │  │  │  ├─ LineLengthUnitTest.php
   │     │  │  │  │  │  ├─ LowercasedFilenameUnitTest.1.inc
   │     │  │  │  │  │  ├─ LowercasedFilenameUnitTest.2.inc
   │     │  │  │  │  │  ├─ LowercasedFilenameUnitTest.php
   │     │  │  │  │  │  ├─ OneClassPerFileUnitTest.inc
   │     │  │  │  │  │  ├─ OneClassPerFileUnitTest.php
   │     │  │  │  │  │  ├─ OneInterfacePerFileUnitTest.inc
   │     │  │  │  │  │  ├─ OneInterfacePerFileUnitTest.php
   │     │  │  │  │  │  ├─ OneObjectStructurePerFileUnitTest.inc
   │     │  │  │  │  │  ├─ OneObjectStructurePerFileUnitTest.php
   │     │  │  │  │  │  ├─ OneTraitPerFileUnitTest.inc
   │     │  │  │  │  │  └─ OneTraitPerFileUnitTest.php
   │     │  │  │  │  ├─ Formatting
   │     │  │  │  │  │  ├─ DisallowMultipleStatementsUnitTest.inc
   │     │  │  │  │  │  ├─ DisallowMultipleStatementsUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ DisallowMultipleStatementsUnitTest.php
   │     │  │  │  │  │  ├─ MultipleStatementAlignmentUnitTest.inc
   │     │  │  │  │  │  ├─ MultipleStatementAlignmentUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ MultipleStatementAlignmentUnitTest.js
   │     │  │  │  │  │  ├─ MultipleStatementAlignmentUnitTest.js.fixed
   │     │  │  │  │  │  ├─ MultipleStatementAlignmentUnitTest.php
   │     │  │  │  │  │  ├─ NoSpaceAfterCastUnitTest.inc
   │     │  │  │  │  │  ├─ NoSpaceAfterCastUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ NoSpaceAfterCastUnitTest.php
   │     │  │  │  │  │  ├─ SpaceAfterCastUnitTest.inc
   │     │  │  │  │  │  ├─ SpaceAfterCastUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ SpaceAfterCastUnitTest.php
   │     │  │  │  │  │  ├─ SpaceAfterNotUnitTest.inc
   │     │  │  │  │  │  ├─ SpaceAfterNotUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ SpaceAfterNotUnitTest.js
   │     │  │  │  │  │  ├─ SpaceAfterNotUnitTest.js.fixed
   │     │  │  │  │  │  ├─ SpaceAfterNotUnitTest.php
   │     │  │  │  │  │  ├─ SpaceBeforeCastUnitTest.inc
   │     │  │  │  │  │  ├─ SpaceBeforeCastUnitTest.inc.fixed
   │     │  │  │  │  │  └─ SpaceBeforeCastUnitTest.php
   │     │  │  │  │  ├─ Functions
   │     │  │  │  │  │  ├─ CallTimePassByReferenceUnitTest.inc
   │     │  │  │  │  │  ├─ CallTimePassByReferenceUnitTest.php
   │     │  │  │  │  │  ├─ FunctionCallArgumentSpacingUnitTest.inc
   │     │  │  │  │  │  ├─ FunctionCallArgumentSpacingUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ FunctionCallArgumentSpacingUnitTest.php
   │     │  │  │  │  │  ├─ OpeningFunctionBraceBsdAllmanUnitTest.inc
   │     │  │  │  │  │  ├─ OpeningFunctionBraceBsdAllmanUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ OpeningFunctionBraceBsdAllmanUnitTest.php
   │     │  │  │  │  │  ├─ OpeningFunctionBraceKernighanRitchieUnitTest.inc
   │     │  │  │  │  │  ├─ OpeningFunctionBraceKernighanRitchieUnitTest.inc.fixed
   │     │  │  │  │  │  └─ OpeningFunctionBraceKernighanRitchieUnitTest.php
   │     │  │  │  │  ├─ Metrics
   │     │  │  │  │  │  ├─ CyclomaticComplexityUnitTest.inc
   │     │  │  │  │  │  ├─ CyclomaticComplexityUnitTest.php
   │     │  │  │  │  │  ├─ NestingLevelUnitTest.inc
   │     │  │  │  │  │  └─ NestingLevelUnitTest.php
   │     │  │  │  │  ├─ NamingConventions
   │     │  │  │  │  │  ├─ AbstractClassNamePrefixUnitTest.inc
   │     │  │  │  │  │  ├─ AbstractClassNamePrefixUnitTest.php
   │     │  │  │  │  │  ├─ CamelCapsFunctionNameUnitTest.inc
   │     │  │  │  │  │  ├─ CamelCapsFunctionNameUnitTest.php
   │     │  │  │  │  │  ├─ ConstructorNameUnitTest.inc
   │     │  │  │  │  │  ├─ ConstructorNameUnitTest.php
   │     │  │  │  │  │  ├─ InterfaceNameSuffixUnitTest.inc
   │     │  │  │  │  │  ├─ InterfaceNameSuffixUnitTest.php
   │     │  │  │  │  │  ├─ TraitNameSuffixUnitTest.inc
   │     │  │  │  │  │  ├─ TraitNameSuffixUnitTest.php
   │     │  │  │  │  │  ├─ UpperCaseConstantNameUnitTest.inc
   │     │  │  │  │  │  └─ UpperCaseConstantNameUnitTest.php
   │     │  │  │  │  ├─ PHP
   │     │  │  │  │  │  ├─ BacktickOperatorUnitTest.inc
   │     │  │  │  │  │  ├─ BacktickOperatorUnitTest.php
   │     │  │  │  │  │  ├─ CharacterBeforePHPOpeningTagUnitTest.1.inc
   │     │  │  │  │  │  ├─ CharacterBeforePHPOpeningTagUnitTest.2.inc
   │     │  │  │  │  │  ├─ CharacterBeforePHPOpeningTagUnitTest.3.inc
   │     │  │  │  │  │  ├─ CharacterBeforePHPOpeningTagUnitTest.php
   │     │  │  │  │  │  ├─ ClosingPHPTagUnitTest.1.inc
   │     │  │  │  │  │  ├─ ClosingPHPTagUnitTest.2.inc
   │     │  │  │  │  │  ├─ ClosingPHPTagUnitTest.php
   │     │  │  │  │  │  ├─ DeprecatedFunctionsUnitTest.inc
   │     │  │  │  │  │  ├─ DeprecatedFunctionsUnitTest.php
   │     │  │  │  │  │  ├─ DisallowAlternativePHPTagsUnitTest.1.inc
   │     │  │  │  │  │  ├─ DisallowAlternativePHPTagsUnitTest.1.inc.fixed
   │     │  │  │  │  │  ├─ DisallowAlternativePHPTagsUnitTest.2.inc
   │     │  │  │  │  │  ├─ DisallowAlternativePHPTagsUnitTest.2.inc.fixed
   │     │  │  │  │  │  ├─ DisallowAlternativePHPTagsUnitTest.3.inc
   │     │  │  │  │  │  ├─ DisallowAlternativePHPTagsUnitTest.php
   │     │  │  │  │  │  ├─ DisallowRequestSuperglobalUnitTest.inc
   │     │  │  │  │  │  ├─ DisallowRequestSuperglobalUnitTest.php
   │     │  │  │  │  │  ├─ DisallowShortOpenTagUnitTest.1.inc
   │     │  │  │  │  │  ├─ DisallowShortOpenTagUnitTest.1.inc.fixed
   │     │  │  │  │  │  ├─ DisallowShortOpenTagUnitTest.2.inc
   │     │  │  │  │  │  ├─ DisallowShortOpenTagUnitTest.2.inc.fixed
   │     │  │  │  │  │  ├─ DisallowShortOpenTagUnitTest.3.inc
   │     │  │  │  │  │  ├─ DisallowShortOpenTagUnitTest.php
   │     │  │  │  │  │  ├─ DiscourageGotoUnitTest.inc
   │     │  │  │  │  │  ├─ DiscourageGotoUnitTest.php
   │     │  │  │  │  │  ├─ ForbiddenFunctionsUnitTest.inc
   │     │  │  │  │  │  ├─ ForbiddenFunctionsUnitTest.php
   │     │  │  │  │  │  ├─ LowerCaseConstantUnitTest.inc
   │     │  │  │  │  │  ├─ LowerCaseConstantUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ LowerCaseConstantUnitTest.js
   │     │  │  │  │  │  ├─ LowerCaseConstantUnitTest.js.fixed
   │     │  │  │  │  │  ├─ LowerCaseConstantUnitTest.php
   │     │  │  │  │  │  ├─ LowerCaseKeywordUnitTest.inc
   │     │  │  │  │  │  ├─ LowerCaseKeywordUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ LowerCaseKeywordUnitTest.php
   │     │  │  │  │  │  ├─ LowerCaseTypeUnitTest.inc
   │     │  │  │  │  │  ├─ LowerCaseTypeUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ LowerCaseTypeUnitTest.php
   │     │  │  │  │  │  ├─ NoSilencedErrorsUnitTest.inc
   │     │  │  │  │  │  ├─ NoSilencedErrorsUnitTest.php
   │     │  │  │  │  │  ├─ RequireStrictTypesUnitTest.1.inc
   │     │  │  │  │  │  ├─ RequireStrictTypesUnitTest.2.inc
   │     │  │  │  │  │  ├─ RequireStrictTypesUnitTest.php
   │     │  │  │  │  │  ├─ SAPIUsageUnitTest.inc
   │     │  │  │  │  │  ├─ SAPIUsageUnitTest.php
   │     │  │  │  │  │  ├─ SyntaxUnitTest.1.inc
   │     │  │  │  │  │  ├─ SyntaxUnitTest.2.inc
   │     │  │  │  │  │  ├─ SyntaxUnitTest.php
   │     │  │  │  │  │  ├─ UpperCaseConstantUnitTest.inc
   │     │  │  │  │  │  ├─ UpperCaseConstantUnitTest.inc.fixed
   │     │  │  │  │  │  └─ UpperCaseConstantUnitTest.php
   │     │  │  │  │  ├─ Strings
   │     │  │  │  │  │  ├─ UnnecessaryStringConcatUnitTest.inc
   │     │  │  │  │  │  ├─ UnnecessaryStringConcatUnitTest.js
   │     │  │  │  │  │  └─ UnnecessaryStringConcatUnitTest.php
   │     │  │  │  │  ├─ VersionControl
   │     │  │  │  │  │  ├─ GitMergeConflictUnitTest.1.css
   │     │  │  │  │  │  ├─ GitMergeConflictUnitTest.1.inc
   │     │  │  │  │  │  ├─ GitMergeConflictUnitTest.2.css
   │     │  │  │  │  │  ├─ GitMergeConflictUnitTest.2.inc
   │     │  │  │  │  │  ├─ GitMergeConflictUnitTest.3.inc
   │     │  │  │  │  │  ├─ GitMergeConflictUnitTest.4.inc
   │     │  │  │  │  │  ├─ GitMergeConflictUnitTest.5.inc
   │     │  │  │  │  │  ├─ GitMergeConflictUnitTest.6.inc
   │     │  │  │  │  │  ├─ GitMergeConflictUnitTest.7.inc
   │     │  │  │  │  │  ├─ GitMergeConflictUnitTest.js
   │     │  │  │  │  │  ├─ GitMergeConflictUnitTest.php
   │     │  │  │  │  │  ├─ SubversionPropertiesUnitTest.inc
   │     │  │  │  │  │  └─ SubversionPropertiesUnitTest.php
   │     │  │  │  │  └─ WhiteSpace
   │     │  │  │  │     ├─ ArbitraryParenthesesSpacingUnitTest.inc
   │     │  │  │  │     ├─ ArbitraryParenthesesSpacingUnitTest.inc.fixed
   │     │  │  │  │     ├─ ArbitraryParenthesesSpacingUnitTest.php
   │     │  │  │  │     ├─ DisallowSpaceIndentUnitTest.1.inc
   │     │  │  │  │     ├─ DisallowSpaceIndentUnitTest.1.inc.fixed
   │     │  │  │  │     ├─ DisallowSpaceIndentUnitTest.2.inc
   │     │  │  │  │     ├─ DisallowSpaceIndentUnitTest.2.inc.fixed
   │     │  │  │  │     ├─ DisallowSpaceIndentUnitTest.3.inc
   │     │  │  │  │     ├─ DisallowSpaceIndentUnitTest.3.inc.fixed
   │     │  │  │  │     ├─ DisallowSpaceIndentUnitTest.css
   │     │  │  │  │     ├─ DisallowSpaceIndentUnitTest.css.fixed
   │     │  │  │  │     ├─ DisallowSpaceIndentUnitTest.js
   │     │  │  │  │     ├─ DisallowSpaceIndentUnitTest.js.fixed
   │     │  │  │  │     ├─ DisallowSpaceIndentUnitTest.php
   │     │  │  │  │     ├─ DisallowTabIndentUnitTest.1.inc
   │     │  │  │  │     ├─ DisallowTabIndentUnitTest.1.inc.fixed
   │     │  │  │  │     ├─ DisallowTabIndentUnitTest.2.inc
   │     │  │  │  │     ├─ DisallowTabIndentUnitTest.2.inc.fixed
   │     │  │  │  │     ├─ DisallowTabIndentUnitTest.3.inc
   │     │  │  │  │     ├─ DisallowTabIndentUnitTest.3.inc.fixed
   │     │  │  │  │     ├─ DisallowTabIndentUnitTest.css
   │     │  │  │  │     ├─ DisallowTabIndentUnitTest.css.fixed
   │     │  │  │  │     ├─ DisallowTabIndentUnitTest.js
   │     │  │  │  │     ├─ DisallowTabIndentUnitTest.js.fixed
   │     │  │  │  │     ├─ DisallowTabIndentUnitTest.php
   │     │  │  │  │     ├─ IncrementDecrementSpacingUnitTest.inc
   │     │  │  │  │     ├─ IncrementDecrementSpacingUnitTest.inc.fixed
   │     │  │  │  │     ├─ IncrementDecrementSpacingUnitTest.js
   │     │  │  │  │     ├─ IncrementDecrementSpacingUnitTest.js.fixed
   │     │  │  │  │     ├─ IncrementDecrementSpacingUnitTest.php
   │     │  │  │  │     ├─ LanguageConstructSpacingUnitTest.inc
   │     │  │  │  │     ├─ LanguageConstructSpacingUnitTest.inc.fixed
   │     │  │  │  │     ├─ LanguageConstructSpacingUnitTest.php
   │     │  │  │  │     ├─ ScopeIndentUnitTest.1.inc
   │     │  │  │  │     ├─ ScopeIndentUnitTest.1.inc.fixed
   │     │  │  │  │     ├─ ScopeIndentUnitTest.1.js
   │     │  │  │  │     ├─ ScopeIndentUnitTest.1.js.fixed
   │     │  │  │  │     ├─ ScopeIndentUnitTest.2.inc
   │     │  │  │  │     ├─ ScopeIndentUnitTest.2.inc.fixed
   │     │  │  │  │     ├─ ScopeIndentUnitTest.3.inc
   │     │  │  │  │     ├─ ScopeIndentUnitTest.3.inc.fixed
   │     │  │  │  │     ├─ ScopeIndentUnitTest.4.inc
   │     │  │  │  │     ├─ ScopeIndentUnitTest.php
   │     │  │  │  │     ├─ SpreadOperatorSpacingAfterUnitTest.inc
   │     │  │  │  │     ├─ SpreadOperatorSpacingAfterUnitTest.inc.fixed
   │     │  │  │  │     └─ SpreadOperatorSpacingAfterUnitTest.php
   │     │  │  │  └─ ruleset.xml
   │     │  │  ├─ MySource
   │     │  │  │  ├─ Sniffs
   │     │  │  │  │  ├─ CSS
   │     │  │  │  │  │  └─ BrowserSpecificStylesSniff.php
   │     │  │  │  │  ├─ Channels
   │     │  │  │  │  │  ├─ DisallowSelfActionsSniff.php
   │     │  │  │  │  │  ├─ IncludeOwnSystemSniff.php
   │     │  │  │  │  │  ├─ IncludeSystemSniff.php
   │     │  │  │  │  │  └─ UnusedSystemSniff.php
   │     │  │  │  │  ├─ Commenting
   │     │  │  │  │  │  └─ FunctionCommentSniff.php
   │     │  │  │  │  ├─ Debug
   │     │  │  │  │  │  ├─ DebugCodeSniff.php
   │     │  │  │  │  │  └─ FirebugConsoleSniff.php
   │     │  │  │  │  ├─ Objects
   │     │  │  │  │  │  ├─ AssignThisSniff.php
   │     │  │  │  │  │  ├─ CreateWidgetTypeCallbackSniff.php
   │     │  │  │  │  │  └─ DisallowNewWidgetSniff.php
   │     │  │  │  │  ├─ PHP
   │     │  │  │  │  │  ├─ AjaxNullComparisonSniff.php
   │     │  │  │  │  │  ├─ EvalObjectFactorySniff.php
   │     │  │  │  │  │  ├─ GetRequestDataSniff.php
   │     │  │  │  │  │  └─ ReturnFunctionValueSniff.php
   │     │  │  │  │  └─ Strings
   │     │  │  │  │     └─ JoinStringsSniff.php
   │     │  │  │  ├─ Tests
   │     │  │  │  │  ├─ CSS
   │     │  │  │  │  │  ├─ BrowserSpecificStylesUnitTest.css
   │     │  │  │  │  │  └─ BrowserSpecificStylesUnitTest.php
   │     │  │  │  │  ├─ Channels
   │     │  │  │  │  │  ├─ DisallowSelfActionsUnitTest.inc
   │     │  │  │  │  │  ├─ DisallowSelfActionsUnitTest.php
   │     │  │  │  │  │  ├─ IncludeSystemUnitTest.inc
   │     │  │  │  │  │  ├─ IncludeSystemUnitTest.php
   │     │  │  │  │  │  ├─ UnusedSystemUnitTest.inc
   │     │  │  │  │  │  └─ UnusedSystemUnitTest.php
   │     │  │  │  │  ├─ Commenting
   │     │  │  │  │  │  ├─ FunctionCommentUnitTest.inc
   │     │  │  │  │  │  └─ FunctionCommentUnitTest.php
   │     │  │  │  │  ├─ Debug
   │     │  │  │  │  │  ├─ DebugCodeUnitTest.inc
   │     │  │  │  │  │  ├─ DebugCodeUnitTest.php
   │     │  │  │  │  │  ├─ FirebugConsoleUnitTest.js
   │     │  │  │  │  │  └─ FirebugConsoleUnitTest.php
   │     │  │  │  │  ├─ Objects
   │     │  │  │  │  │  ├─ AssignThisUnitTest.js
   │     │  │  │  │  │  ├─ AssignThisUnitTest.php
   │     │  │  │  │  │  ├─ CreateWidgetTypeCallbackUnitTest.js
   │     │  │  │  │  │  ├─ CreateWidgetTypeCallbackUnitTest.php
   │     │  │  │  │  │  ├─ DisallowNewWidgetUnitTest.inc
   │     │  │  │  │  │  └─ DisallowNewWidgetUnitTest.php
   │     │  │  │  │  ├─ PHP
   │     │  │  │  │  │  ├─ AjaxNullComparisonUnitTest.inc
   │     │  │  │  │  │  ├─ AjaxNullComparisonUnitTest.php
   │     │  │  │  │  │  ├─ EvalObjectFactoryUnitTest.inc
   │     │  │  │  │  │  ├─ EvalObjectFactoryUnitTest.php
   │     │  │  │  │  │  ├─ GetRequestDataUnitTest.inc
   │     │  │  │  │  │  ├─ GetRequestDataUnitTest.php
   │     │  │  │  │  │  ├─ ReturnFunctionValueUnitTest.inc
   │     │  │  │  │  │  └─ ReturnFunctionValueUnitTest.php
   │     │  │  │  │  └─ Strings
   │     │  │  │  │     ├─ JoinStringsUnitTest.js
   │     │  │  │  │     └─ JoinStringsUnitTest.php
   │     │  │  │  └─ ruleset.xml
   │     │  │  ├─ PEAR
   │     │  │  │  ├─ Docs
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  └─ ClassDeclarationStandard.xml
   │     │  │  │  │  ├─ Commenting
   │     │  │  │  │  │  ├─ ClassCommentStandard.xml
   │     │  │  │  │  │  ├─ FileCommentStandard.xml
   │     │  │  │  │  │  ├─ FunctionCommentStandard.xml
   │     │  │  │  │  │  └─ InlineCommentStandard.xml
   │     │  │  │  │  ├─ ControlStructures
   │     │  │  │  │  │  ├─ ControlSignatureStandard.xml
   │     │  │  │  │  │  └─ MultiLineConditionStandard.xml
   │     │  │  │  │  ├─ Files
   │     │  │  │  │  │  ├─ IncludingFileStandard.xml
   │     │  │  │  │  │  └─ LineLengthStandard.xml
   │     │  │  │  │  ├─ Formatting
   │     │  │  │  │  │  └─ MultiLineAssignmentStandard.xml
   │     │  │  │  │  ├─ Functions
   │     │  │  │  │  │  ├─ FunctionCallSignatureStandard.xml
   │     │  │  │  │  │  ├─ FunctionDeclarationStandard.xml
   │     │  │  │  │  │  └─ ValidDefaultValueStandard.xml
   │     │  │  │  │  ├─ NamingConventions
   │     │  │  │  │  │  ├─ ValidClassNameStandard.xml
   │     │  │  │  │  │  ├─ ValidFunctionNameStandard.xml
   │     │  │  │  │  │  └─ ValidVariableNameStandard.xml
   │     │  │  │  │  └─ WhiteSpace
   │     │  │  │  │     ├─ ObjectOperatorIndentStandard.xml
   │     │  │  │  │     ├─ ScopeClosingBraceStandard.xml
   │     │  │  │  │     └─ ScopeIndentStandard.xml
   │     │  │  │  ├─ Sniffs
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  └─ ClassDeclarationSniff.php
   │     │  │  │  │  ├─ Commenting
   │     │  │  │  │  │  ├─ ClassCommentSniff.php
   │     │  │  │  │  │  ├─ FileCommentSniff.php
   │     │  │  │  │  │  ├─ FunctionCommentSniff.php
   │     │  │  │  │  │  └─ InlineCommentSniff.php
   │     │  │  │  │  ├─ ControlStructures
   │     │  │  │  │  │  ├─ ControlSignatureSniff.php
   │     │  │  │  │  │  └─ MultiLineConditionSniff.php
   │     │  │  │  │  ├─ Files
   │     │  │  │  │  │  └─ IncludingFileSniff.php
   │     │  │  │  │  ├─ Formatting
   │     │  │  │  │  │  └─ MultiLineAssignmentSniff.php
   │     │  │  │  │  ├─ Functions
   │     │  │  │  │  │  ├─ FunctionCallSignatureSniff.php
   │     │  │  │  │  │  ├─ FunctionDeclarationSniff.php
   │     │  │  │  │  │  └─ ValidDefaultValueSniff.php
   │     │  │  │  │  ├─ NamingConventions
   │     │  │  │  │  │  ├─ ValidClassNameSniff.php
   │     │  │  │  │  │  ├─ ValidFunctionNameSniff.php
   │     │  │  │  │  │  └─ ValidVariableNameSniff.php
   │     │  │  │  │  └─ WhiteSpace
   │     │  │  │  │     ├─ ObjectOperatorIndentSniff.php
   │     │  │  │  │     ├─ ScopeClosingBraceSniff.php
   │     │  │  │  │     └─ ScopeIndentSniff.php
   │     │  │  │  ├─ Tests
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  ├─ ClassDeclarationUnitTest.1.inc
   │     │  │  │  │  │  ├─ ClassDeclarationUnitTest.1.inc.fixed
   │     │  │  │  │  │  ├─ ClassDeclarationUnitTest.2.inc
   │     │  │  │  │  │  └─ ClassDeclarationUnitTest.php
   │     │  │  │  │  ├─ Commenting
   │     │  │  │  │  │  ├─ ClassCommentUnitTest.inc
   │     │  │  │  │  │  ├─ ClassCommentUnitTest.php
   │     │  │  │  │  │  ├─ FileCommentUnitTest.1.inc
   │     │  │  │  │  │  ├─ FileCommentUnitTest.2.inc
   │     │  │  │  │  │  ├─ FileCommentUnitTest.3.inc
   │     │  │  │  │  │  ├─ FileCommentUnitTest.php
   │     │  │  │  │  │  ├─ FunctionCommentUnitTest.inc
   │     │  │  │  │  │  ├─ FunctionCommentUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ FunctionCommentUnitTest.php
   │     │  │  │  │  │  ├─ InlineCommentUnitTest.inc
   │     │  │  │  │  │  ├─ InlineCommentUnitTest.inc.fixed
   │     │  │  │  │  │  └─ InlineCommentUnitTest.php
   │     │  │  │  │  ├─ ControlStructures
   │     │  │  │  │  │  ├─ ControlSignatureUnitTest.inc
   │     │  │  │  │  │  ├─ ControlSignatureUnitTest.php
   │     │  │  │  │  │  ├─ MultiLineConditionUnitTest.inc
   │     │  │  │  │  │  ├─ MultiLineConditionUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ MultiLineConditionUnitTest.js
   │     │  │  │  │  │  ├─ MultiLineConditionUnitTest.js.fixed
   │     │  │  │  │  │  └─ MultiLineConditionUnitTest.php
   │     │  │  │  │  ├─ Files
   │     │  │  │  │  │  ├─ IncludingFileUnitTest.inc
   │     │  │  │  │  │  ├─ IncludingFileUnitTest.inc.fixed
   │     │  │  │  │  │  └─ IncludingFileUnitTest.php
   │     │  │  │  │  ├─ Formatting
   │     │  │  │  │  │  ├─ MultiLineAssignmentUnitTest.inc
   │     │  │  │  │  │  └─ MultiLineAssignmentUnitTest.php
   │     │  │  │  │  ├─ Functions
   │     │  │  │  │  │  ├─ FunctionCallSignatureUnitTest.inc
   │     │  │  │  │  │  ├─ FunctionCallSignatureUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ FunctionCallSignatureUnitTest.js
   │     │  │  │  │  │  ├─ FunctionCallSignatureUnitTest.js.fixed
   │     │  │  │  │  │  ├─ FunctionCallSignatureUnitTest.php
   │     │  │  │  │  │  ├─ FunctionDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ FunctionDeclarationUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ FunctionDeclarationUnitTest.js
   │     │  │  │  │  │  ├─ FunctionDeclarationUnitTest.js.fixed
   │     │  │  │  │  │  ├─ FunctionDeclarationUnitTest.php
   │     │  │  │  │  │  ├─ ValidDefaultValueUnitTest.inc
   │     │  │  │  │  │  └─ ValidDefaultValueUnitTest.php
   │     │  │  │  │  ├─ NamingConventions
   │     │  │  │  │  │  ├─ ValidClassNameUnitTest.inc
   │     │  │  │  │  │  ├─ ValidClassNameUnitTest.php
   │     │  │  │  │  │  ├─ ValidFunctionNameUnitTest.inc
   │     │  │  │  │  │  ├─ ValidFunctionNameUnitTest.php
   │     │  │  │  │  │  ├─ ValidVariableNameUnitTest.inc
   │     │  │  │  │  │  └─ ValidVariableNameUnitTest.php
   │     │  │  │  │  └─ WhiteSpace
   │     │  │  │  │     ├─ ObjectOperatorIndentUnitTest.inc
   │     │  │  │  │     ├─ ObjectOperatorIndentUnitTest.inc.fixed
   │     │  │  │  │     ├─ ObjectOperatorIndentUnitTest.php
   │     │  │  │  │     ├─ ScopeClosingBraceUnitTest.inc
   │     │  │  │  │     ├─ ScopeClosingBraceUnitTest.inc.fixed
   │     │  │  │  │     ├─ ScopeClosingBraceUnitTest.php
   │     │  │  │  │     ├─ ScopeIndentUnitTest.inc
   │     │  │  │  │     └─ ScopeIndentUnitTest.php
   │     │  │  │  └─ ruleset.xml
   │     │  │  ├─ PSR1
   │     │  │  │  ├─ Docs
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  └─ ClassDeclarationStandard.xml
   │     │  │  │  │  ├─ Files
   │     │  │  │  │  │  └─ SideEffectsStandard.xml
   │     │  │  │  │  └─ Methods
   │     │  │  │  │     └─ CamelCapsMethodNameStandard.xml
   │     │  │  │  ├─ Sniffs
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  └─ ClassDeclarationSniff.php
   │     │  │  │  │  ├─ Files
   │     │  │  │  │  │  └─ SideEffectsSniff.php
   │     │  │  │  │  └─ Methods
   │     │  │  │  │     └─ CamelCapsMethodNameSniff.php
   │     │  │  │  ├─ Tests
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  ├─ ClassDeclarationUnitTest.1.inc
   │     │  │  │  │  │  ├─ ClassDeclarationUnitTest.2.inc
   │     │  │  │  │  │  ├─ ClassDeclarationUnitTest.3.inc
   │     │  │  │  │  │  └─ ClassDeclarationUnitTest.php
   │     │  │  │  │  ├─ Files
   │     │  │  │  │  │  ├─ SideEffectsUnitTest.1.inc
   │     │  │  │  │  │  ├─ SideEffectsUnitTest.10.inc
   │     │  │  │  │  │  ├─ SideEffectsUnitTest.11.inc
   │     │  │  │  │  │  ├─ SideEffectsUnitTest.12.inc
   │     │  │  │  │  │  ├─ SideEffectsUnitTest.13.inc
   │     │  │  │  │  │  ├─ SideEffectsUnitTest.14.inc
   │     │  │  │  │  │  ├─ SideEffectsUnitTest.15.inc
   │     │  │  │  │  │  ├─ SideEffectsUnitTest.16.inc
   │     │  │  │  │  │  ├─ SideEffectsUnitTest.2.inc
   │     │  │  │  │  │  ├─ SideEffectsUnitTest.3.inc
   │     │  │  │  │  │  ├─ SideEffectsUnitTest.4.inc
   │     │  │  │  │  │  ├─ SideEffectsUnitTest.5.inc
   │     │  │  │  │  │  ├─ SideEffectsUnitTest.6.inc
   │     │  │  │  │  │  ├─ SideEffectsUnitTest.7.inc
   │     │  │  │  │  │  ├─ SideEffectsUnitTest.8.inc
   │     │  │  │  │  │  ├─ SideEffectsUnitTest.9.inc
   │     │  │  │  │  │  └─ SideEffectsUnitTest.php
   │     │  │  │  │  └─ Methods
   │     │  │  │  │     ├─ CamelCapsMethodNameUnitTest.inc
   │     │  │  │  │     └─ CamelCapsMethodNameUnitTest.php
   │     │  │  │  └─ ruleset.xml
   │     │  │  ├─ PSR12
   │     │  │  │  ├─ Docs
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  └─ ClassInstantiationStandard.xml
   │     │  │  │  │  ├─ Functions
   │     │  │  │  │  │  └─ NullableTypeDeclarationStandard.xml
   │     │  │  │  │  ├─ Keywords
   │     │  │  │  │  │  └─ ShortFormTypeKeywordsStandard.xml
   │     │  │  │  │  ├─ Namespaces
   │     │  │  │  │  │  └─ CompoundNamespaceDepthStandard.xml
   │     │  │  │  │  └─ Operators
   │     │  │  │  │     └─ OperatorSpacingStandard.xml
   │     │  │  │  ├─ Sniffs
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  ├─ AnonClassDeclarationSniff.php
   │     │  │  │  │  │  ├─ ClassInstantiationSniff.php
   │     │  │  │  │  │  ├─ ClosingBraceSniff.php
   │     │  │  │  │  │  └─ OpeningBraceSpaceSniff.php
   │     │  │  │  │  ├─ ControlStructures
   │     │  │  │  │  │  ├─ BooleanOperatorPlacementSniff.php
   │     │  │  │  │  │  └─ ControlStructureSpacingSniff.php
   │     │  │  │  │  ├─ Files
   │     │  │  │  │  │  ├─ DeclareStatementSniff.php
   │     │  │  │  │  │  ├─ FileHeaderSniff.php
   │     │  │  │  │  │  ├─ ImportStatementSniff.php
   │     │  │  │  │  │  └─ OpenTagSniff.php
   │     │  │  │  │  ├─ Functions
   │     │  │  │  │  │  ├─ NullableTypeDeclarationSniff.php
   │     │  │  │  │  │  └─ ReturnTypeDeclarationSniff.php
   │     │  │  │  │  ├─ Keywords
   │     │  │  │  │  │  └─ ShortFormTypeKeywordsSniff.php
   │     │  │  │  │  ├─ Namespaces
   │     │  │  │  │  │  └─ CompoundNamespaceDepthSniff.php
   │     │  │  │  │  ├─ Operators
   │     │  │  │  │  │  └─ OperatorSpacingSniff.php
   │     │  │  │  │  ├─ Properties
   │     │  │  │  │  │  └─ ConstantVisibilitySniff.php
   │     │  │  │  │  └─ Traits
   │     │  │  │  │     └─ UseDeclarationSniff.php
   │     │  │  │  ├─ Tests
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  ├─ AnonClassDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ AnonClassDeclarationUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ AnonClassDeclarationUnitTest.php
   │     │  │  │  │  │  ├─ ClassInstantiationUnitTest.inc
   │     │  │  │  │  │  ├─ ClassInstantiationUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ ClassInstantiationUnitTest.php
   │     │  │  │  │  │  ├─ ClosingBraceUnitTest.inc
   │     │  │  │  │  │  ├─ ClosingBraceUnitTest.php
   │     │  │  │  │  │  ├─ OpeningBraceSpaceUnitTest.inc
   │     │  │  │  │  │  ├─ OpeningBraceSpaceUnitTest.inc.fixed
   │     │  │  │  │  │  └─ OpeningBraceSpaceUnitTest.php
   │     │  │  │  │  ├─ ControlStructures
   │     │  │  │  │  │  ├─ BooleanOperatorPlacementUnitTest.inc
   │     │  │  │  │  │  ├─ BooleanOperatorPlacementUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ BooleanOperatorPlacementUnitTest.php
   │     │  │  │  │  │  ├─ ControlStructureSpacingUnitTest.inc
   │     │  │  │  │  │  ├─ ControlStructureSpacingUnitTest.inc.fixed
   │     │  │  │  │  │  └─ ControlStructureSpacingUnitTest.php
   │     │  │  │  │  ├─ Files
   │     │  │  │  │  │  ├─ DeclareStatementUnitTest.inc
   │     │  │  │  │  │  ├─ DeclareStatementUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ DeclareStatementUnitTest.php
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.1.inc
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.10.inc
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.10.inc.fixed
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.11.inc
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.11.inc.fixed
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.12.inc
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.12.inc.fixed
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.13.inc
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.14.inc
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.15.inc
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.16.inc
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.17.inc
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.2.inc
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.2.inc.fixed
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.3.inc
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.4.inc
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.4.inc.fixed
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.5.inc
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.6.inc
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.7.inc
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.7.inc.fixed
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.8.inc
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.9.inc
   │     │  │  │  │  │  ├─ FileHeaderUnitTest.php
   │     │  │  │  │  │  ├─ ImportStatementUnitTest.inc
   │     │  │  │  │  │  ├─ ImportStatementUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ ImportStatementUnitTest.php
   │     │  │  │  │  │  ├─ OpenTagUnitTest.1.inc
   │     │  │  │  │  │  ├─ OpenTagUnitTest.2.inc
   │     │  │  │  │  │  ├─ OpenTagUnitTest.2.inc.fixed
   │     │  │  │  │  │  ├─ OpenTagUnitTest.3.inc
   │     │  │  │  │  │  ├─ OpenTagUnitTest.4.inc
   │     │  │  │  │  │  ├─ OpenTagUnitTest.5.inc
   │     │  │  │  │  │  └─ OpenTagUnitTest.php
   │     │  │  │  │  ├─ Functions
   │     │  │  │  │  │  ├─ NullableTypeDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ NullableTypeDeclarationUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ NullableTypeDeclarationUnitTest.php
   │     │  │  │  │  │  ├─ ReturnTypeDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ ReturnTypeDeclarationUnitTest.inc.fixed
   │     │  │  │  │  │  └─ ReturnTypeDeclarationUnitTest.php
   │     │  │  │  │  ├─ Keywords
   │     │  │  │  │  │  ├─ ShortFormTypeKeywordsUnitTest.inc
   │     │  │  │  │  │  ├─ ShortFormTypeKeywordsUnitTest.inc.fixed
   │     │  │  │  │  │  └─ ShortFormTypeKeywordsUnitTest.php
   │     │  │  │  │  ├─ Namespaces
   │     │  │  │  │  │  ├─ CompoundNamespaceDepthUnitTest.inc
   │     │  │  │  │  │  └─ CompoundNamespaceDepthUnitTest.php
   │     │  │  │  │  ├─ Operators
   │     │  │  │  │  │  ├─ OperatorSpacingUnitTest.inc
   │     │  │  │  │  │  ├─ OperatorSpacingUnitTest.inc.fixed
   │     │  │  │  │  │  └─ OperatorSpacingUnitTest.php
   │     │  │  │  │  ├─ Properties
   │     │  │  │  │  │  ├─ ConstantVisibilityUnitTest.inc
   │     │  │  │  │  │  └─ ConstantVisibilityUnitTest.php
   │     │  │  │  │  └─ Traits
   │     │  │  │  │     ├─ UseDeclarationUnitTest.inc
   │     │  │  │  │     ├─ UseDeclarationUnitTest.inc.fixed
   │     │  │  │  │     └─ UseDeclarationUnitTest.php
   │     │  │  │  └─ ruleset.xml
   │     │  │  ├─ PSR2
   │     │  │  │  ├─ Docs
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  ├─ ClassDeclarationStandard.xml
   │     │  │  │  │  │  └─ PropertyDeclarationStandard.xml
   │     │  │  │  │  ├─ ControlStructures
   │     │  │  │  │  │  ├─ ControlStructureSpacingStandard.xml
   │     │  │  │  │  │  ├─ ElseIfDeclarationStandard.xml
   │     │  │  │  │  │  └─ SwitchDeclarationStandard.xml
   │     │  │  │  │  ├─ Files
   │     │  │  │  │  │  └─ EndFileNewlineStandard.xml
   │     │  │  │  │  ├─ Methods
   │     │  │  │  │  │  └─ MethodDeclarationStandard.xml
   │     │  │  │  │  └─ Namespaces
   │     │  │  │  │     ├─ NamespaceDeclarationStandard.xml
   │     │  │  │  │     └─ UseDeclarationStandard.xml
   │     │  │  │  ├─ Sniffs
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  ├─ ClassDeclarationSniff.php
   │     │  │  │  │  │  └─ PropertyDeclarationSniff.php
   │     │  │  │  │  ├─ ControlStructures
   │     │  │  │  │  │  ├─ ControlStructureSpacingSniff.php
   │     │  │  │  │  │  ├─ ElseIfDeclarationSniff.php
   │     │  │  │  │  │  └─ SwitchDeclarationSniff.php
   │     │  │  │  │  ├─ Files
   │     │  │  │  │  │  ├─ ClosingTagSniff.php
   │     │  │  │  │  │  └─ EndFileNewlineSniff.php
   │     │  │  │  │  ├─ Methods
   │     │  │  │  │  │  ├─ FunctionCallSignatureSniff.php
   │     │  │  │  │  │  ├─ FunctionClosingBraceSniff.php
   │     │  │  │  │  │  └─ MethodDeclarationSniff.php
   │     │  │  │  │  └─ Namespaces
   │     │  │  │  │     ├─ NamespaceDeclarationSniff.php
   │     │  │  │  │     └─ UseDeclarationSniff.php
   │     │  │  │  ├─ Tests
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  ├─ ClassDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ ClassDeclarationUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ ClassDeclarationUnitTest.php
   │     │  │  │  │  │  ├─ PropertyDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ PropertyDeclarationUnitTest.inc.fixed
   │     │  │  │  │  │  └─ PropertyDeclarationUnitTest.php
   │     │  │  │  │  ├─ ControlStructures
   │     │  │  │  │  │  ├─ ControlStructureSpacingUnitTest.inc
   │     │  │  │  │  │  ├─ ControlStructureSpacingUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ ControlStructureSpacingUnitTest.php
   │     │  │  │  │  │  ├─ ElseIfDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ ElseIfDeclarationUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ ElseIfDeclarationUnitTest.php
   │     │  │  │  │  │  ├─ SwitchDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ SwitchDeclarationUnitTest.inc.fixed
   │     │  │  │  │  │  └─ SwitchDeclarationUnitTest.php
   │     │  │  │  │  ├─ Files
   │     │  │  │  │  │  ├─ ClosingTagUnitTest.1.inc
   │     │  │  │  │  │  ├─ ClosingTagUnitTest.1.inc.fixed
   │     │  │  │  │  │  ├─ ClosingTagUnitTest.2.inc
   │     │  │  │  │  │  ├─ ClosingTagUnitTest.3.inc
   │     │  │  │  │  │  ├─ ClosingTagUnitTest.4.inc
   │     │  │  │  │  │  ├─ ClosingTagUnitTest.4.inc.fixed
   │     │  │  │  │  │  ├─ ClosingTagUnitTest.5.inc
   │     │  │  │  │  │  ├─ ClosingTagUnitTest.5.inc.fixed
   │     │  │  │  │  │  ├─ ClosingTagUnitTest.6.inc
   │     │  │  │  │  │  ├─ ClosingTagUnitTest.6.inc.fixed
   │     │  │  │  │  │  ├─ ClosingTagUnitTest.7.inc
   │     │  │  │  │  │  ├─ ClosingTagUnitTest.7.inc.fixed
   │     │  │  │  │  │  ├─ ClosingTagUnitTest.php
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.1.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.1.inc.fixed
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.10.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.10.inc.fixed
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.11.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.11.inc.fixed
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.12.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.12.inc.fixed
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.13.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.13.inc.fixed
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.14.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.2.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.3.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.3.inc.fixed
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.4.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.5.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.6.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.6.inc.fixed
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.7.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.7.inc.fixed
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.8.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.9.inc
   │     │  │  │  │  │  ├─ EndFileNewlineUnitTest.9.inc.fixed
   │     │  │  │  │  │  └─ EndFileNewlineUnitTest.php
   │     │  │  │  │  ├─ Methods
   │     │  │  │  │  │  ├─ FunctionCallSignatureUnitTest.inc
   │     │  │  │  │  │  ├─ FunctionCallSignatureUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ FunctionCallSignatureUnitTest.php
   │     │  │  │  │  │  ├─ FunctionClosingBraceUnitTest.inc
   │     │  │  │  │  │  ├─ FunctionClosingBraceUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ FunctionClosingBraceUnitTest.php
   │     │  │  │  │  │  ├─ MethodDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ MethodDeclarationUnitTest.inc.fixed
   │     │  │  │  │  │  └─ MethodDeclarationUnitTest.php
   │     │  │  │  │  └─ Namespaces
   │     │  │  │  │     ├─ NamespaceDeclarationUnitTest.inc
   │     │  │  │  │     ├─ NamespaceDeclarationUnitTest.inc.fixed
   │     │  │  │  │     ├─ NamespaceDeclarationUnitTest.php
   │     │  │  │  │     ├─ UseDeclarationUnitTest.1.inc
   │     │  │  │  │     ├─ UseDeclarationUnitTest.10.inc
   │     │  │  │  │     ├─ UseDeclarationUnitTest.10.inc.fixed
   │     │  │  │  │     ├─ UseDeclarationUnitTest.11.inc
   │     │  │  │  │     ├─ UseDeclarationUnitTest.11.inc.fixed
   │     │  │  │  │     ├─ UseDeclarationUnitTest.12.inc
   │     │  │  │  │     ├─ UseDeclarationUnitTest.12.inc.fixed
   │     │  │  │  │     ├─ UseDeclarationUnitTest.13.inc
   │     │  │  │  │     ├─ UseDeclarationUnitTest.13.inc.fixed
   │     │  │  │  │     ├─ UseDeclarationUnitTest.14.inc
   │     │  │  │  │     ├─ UseDeclarationUnitTest.14.inc.fixed
   │     │  │  │  │     ├─ UseDeclarationUnitTest.15.inc
   │     │  │  │  │     ├─ UseDeclarationUnitTest.16.inc
   │     │  │  │  │     ├─ UseDeclarationUnitTest.16.inc.fixed
   │     │  │  │  │     ├─ UseDeclarationUnitTest.17.inc
   │     │  │  │  │     ├─ UseDeclarationUnitTest.2.inc
   │     │  │  │  │     ├─ UseDeclarationUnitTest.2.inc.fixed
   │     │  │  │  │     ├─ UseDeclarationUnitTest.3.inc
   │     │  │  │  │     ├─ UseDeclarationUnitTest.3.inc.fixed
   │     │  │  │  │     ├─ UseDeclarationUnitTest.4.inc
   │     │  │  │  │     ├─ UseDeclarationUnitTest.5.inc
   │     │  │  │  │     ├─ UseDeclarationUnitTest.5.inc.fixed
   │     │  │  │  │     ├─ UseDeclarationUnitTest.6.inc
   │     │  │  │  │     ├─ UseDeclarationUnitTest.7.inc
   │     │  │  │  │     ├─ UseDeclarationUnitTest.8.inc
   │     │  │  │  │     ├─ UseDeclarationUnitTest.9.inc
   │     │  │  │  │     └─ UseDeclarationUnitTest.php
   │     │  │  │  └─ ruleset.xml
   │     │  │  ├─ Squiz
   │     │  │  │  ├─ Docs
   │     │  │  │  │  ├─ Arrays
   │     │  │  │  │  │  ├─ ArrayBracketSpacingStandard.xml
   │     │  │  │  │  │  └─ ArrayDeclarationStandard.xml
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  ├─ LowercaseClassKeywordsStandard.xml
   │     │  │  │  │  │  └─ SelfMemberReferenceStandard.xml
   │     │  │  │  │  ├─ Commenting
   │     │  │  │  │  │  ├─ DocCommentAlignmentStandard.xml
   │     │  │  │  │  │  └─ FunctionCommentThrowTagStandard.xml
   │     │  │  │  │  ├─ ControlStructures
   │     │  │  │  │  │  ├─ ForEachLoopDeclarationStandard.xml
   │     │  │  │  │  │  ├─ ForLoopDeclarationStandard.xml
   │     │  │  │  │  │  └─ LowercaseDeclarationStandard.xml
   │     │  │  │  │  ├─ Functions
   │     │  │  │  │  │  ├─ FunctionDuplicateArgumentStandard.xml
   │     │  │  │  │  │  └─ LowercaseFunctionKeywordsStandard.xml
   │     │  │  │  │  ├─ Scope
   │     │  │  │  │  │  └─ StaticThisUsageStandard.xml
   │     │  │  │  │  ├─ Strings
   │     │  │  │  │  │  └─ EchoedStringsStandard.xml
   │     │  │  │  │  └─ WhiteSpace
   │     │  │  │  │     ├─ CastSpacingStandard.xml
   │     │  │  │  │     ├─ FunctionOpeningBraceStandard.xml
   │     │  │  │  │     ├─ LanguageConstructSpacingStandard.xml
   │     │  │  │  │     ├─ ObjectOperatorSpacingStandard.xml
   │     │  │  │  │     ├─ ScopeKeywordSpacingStandard.xml
   │     │  │  │  │     └─ SemicolonSpacingStandard.xml
   │     │  │  │  ├─ Sniffs
   │     │  │  │  │  ├─ Arrays
   │     │  │  │  │  │  ├─ ArrayBracketSpacingSniff.php
   │     │  │  │  │  │  └─ ArrayDeclarationSniff.php
   │     │  │  │  │  ├─ CSS
   │     │  │  │  │  │  ├─ ClassDefinitionClosingBraceSpaceSniff.php
   │     │  │  │  │  │  ├─ ClassDefinitionNameSpacingSniff.php
   │     │  │  │  │  │  ├─ ClassDefinitionOpeningBraceSpaceSniff.php
   │     │  │  │  │  │  ├─ ColonSpacingSniff.php
   │     │  │  │  │  │  ├─ ColourDefinitionSniff.php
   │     │  │  │  │  │  ├─ DisallowMultipleStyleDefinitionsSniff.php
   │     │  │  │  │  │  ├─ DuplicateClassDefinitionSniff.php
   │     │  │  │  │  │  ├─ DuplicateStyleDefinitionSniff.php
   │     │  │  │  │  │  ├─ EmptyClassDefinitionSniff.php
   │     │  │  │  │  │  ├─ EmptyStyleDefinitionSniff.php
   │     │  │  │  │  │  ├─ ForbiddenStylesSniff.php
   │     │  │  │  │  │  ├─ IndentationSniff.php
   │     │  │  │  │  │  ├─ LowercaseStyleDefinitionSniff.php
   │     │  │  │  │  │  ├─ MissingColonSniff.php
   │     │  │  │  │  │  ├─ NamedColoursSniff.php
   │     │  │  │  │  │  ├─ OpacitySniff.php
   │     │  │  │  │  │  ├─ SemicolonSpacingSniff.php
   │     │  │  │  │  │  └─ ShorthandSizeSniff.php
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  ├─ ClassDeclarationSniff.php
   │     │  │  │  │  │  ├─ ClassFileNameSniff.php
   │     │  │  │  │  │  ├─ DuplicatePropertySniff.php
   │     │  │  │  │  │  ├─ LowercaseClassKeywordsSniff.php
   │     │  │  │  │  │  ├─ SelfMemberReferenceSniff.php
   │     │  │  │  │  │  └─ ValidClassNameSniff.php
   │     │  │  │  │  ├─ Commenting
   │     │  │  │  │  │  ├─ BlockCommentSniff.php
   │     │  │  │  │  │  ├─ ClassCommentSniff.php
   │     │  │  │  │  │  ├─ ClosingDeclarationCommentSniff.php
   │     │  │  │  │  │  ├─ DocCommentAlignmentSniff.php
   │     │  │  │  │  │  ├─ EmptyCatchCommentSniff.php
   │     │  │  │  │  │  ├─ FileCommentSniff.php
   │     │  │  │  │  │  ├─ FunctionCommentSniff.php
   │     │  │  │  │  │  ├─ FunctionCommentThrowTagSniff.php
   │     │  │  │  │  │  ├─ InlineCommentSniff.php
   │     │  │  │  │  │  ├─ LongConditionClosingCommentSniff.php
   │     │  │  │  │  │  ├─ PostStatementCommentSniff.php
   │     │  │  │  │  │  └─ VariableCommentSniff.php
   │     │  │  │  │  ├─ ControlStructures
   │     │  │  │  │  │  ├─ ControlSignatureSniff.php
   │     │  │  │  │  │  ├─ ElseIfDeclarationSniff.php
   │     │  │  │  │  │  ├─ ForEachLoopDeclarationSniff.php
   │     │  │  │  │  │  ├─ ForLoopDeclarationSniff.php
   │     │  │  │  │  │  ├─ InlineIfDeclarationSniff.php
   │     │  │  │  │  │  ├─ LowercaseDeclarationSniff.php
   │     │  │  │  │  │  └─ SwitchDeclarationSniff.php
   │     │  │  │  │  ├─ Debug
   │     │  │  │  │  │  ├─ JSLintSniff.php
   │     │  │  │  │  │  └─ JavaScriptLintSniff.php
   │     │  │  │  │  ├─ Files
   │     │  │  │  │  │  └─ FileExtensionSniff.php
   │     │  │  │  │  ├─ Formatting
   │     │  │  │  │  │  └─ OperatorBracketSniff.php
   │     │  │  │  │  ├─ Functions
   │     │  │  │  │  │  ├─ FunctionDeclarationArgumentSpacingSniff.php
   │     │  │  │  │  │  ├─ FunctionDeclarationSniff.php
   │     │  │  │  │  │  ├─ FunctionDuplicateArgumentSniff.php
   │     │  │  │  │  │  ├─ GlobalFunctionSniff.php
   │     │  │  │  │  │  ├─ LowercaseFunctionKeywordsSniff.php
   │     │  │  │  │  │  └─ MultiLineFunctionDeclarationSniff.php
   │     │  │  │  │  ├─ NamingConventions
   │     │  │  │  │  │  ├─ ValidFunctionNameSniff.php
   │     │  │  │  │  │  └─ ValidVariableNameSniff.php
   │     │  │  │  │  ├─ Objects
   │     │  │  │  │  │  ├─ DisallowObjectStringIndexSniff.php
   │     │  │  │  │  │  ├─ ObjectInstantiationSniff.php
   │     │  │  │  │  │  └─ ObjectMemberCommaSniff.php
   │     │  │  │  │  ├─ Operators
   │     │  │  │  │  │  ├─ ComparisonOperatorUsageSniff.php
   │     │  │  │  │  │  ├─ IncrementDecrementUsageSniff.php
   │     │  │  │  │  │  └─ ValidLogicalOperatorsSniff.php
   │     │  │  │  │  ├─ PHP
   │     │  │  │  │  │  ├─ CommentedOutCodeSniff.php
   │     │  │  │  │  │  ├─ DisallowBooleanStatementSniff.php
   │     │  │  │  │  │  ├─ DisallowComparisonAssignmentSniff.php
   │     │  │  │  │  │  ├─ DisallowInlineIfSniff.php
   │     │  │  │  │  │  ├─ DisallowMultipleAssignmentsSniff.php
   │     │  │  │  │  │  ├─ DisallowSizeFunctionsInLoopsSniff.php
   │     │  │  │  │  │  ├─ DiscouragedFunctionsSniff.php
   │     │  │  │  │  │  ├─ EmbeddedPhpSniff.php
   │     │  │  │  │  │  ├─ EvalSniff.php
   │     │  │  │  │  │  ├─ GlobalKeywordSniff.php
   │     │  │  │  │  │  ├─ HeredocSniff.php
   │     │  │  │  │  │  ├─ InnerFunctionsSniff.php
   │     │  │  │  │  │  ├─ LowercasePHPFunctionsSniff.php
   │     │  │  │  │  │  └─ NonExecutableCodeSniff.php
   │     │  │  │  │  ├─ Scope
   │     │  │  │  │  │  ├─ MemberVarScopeSniff.php
   │     │  │  │  │  │  ├─ MethodScopeSniff.php
   │     │  │  │  │  │  └─ StaticThisUsageSniff.php
   │     │  │  │  │  ├─ Strings
   │     │  │  │  │  │  ├─ ConcatenationSpacingSniff.php
   │     │  │  │  │  │  ├─ DoubleQuoteUsageSniff.php
   │     │  │  │  │  │  └─ EchoedStringsSniff.php
   │     │  │  │  │  └─ WhiteSpace
   │     │  │  │  │     ├─ CastSpacingSniff.php
   │     │  │  │  │     ├─ ControlStructureSpacingSniff.php
   │     │  │  │  │     ├─ FunctionClosingBraceSpaceSniff.php
   │     │  │  │  │     ├─ FunctionOpeningBraceSpaceSniff.php
   │     │  │  │  │     ├─ FunctionSpacingSniff.php
   │     │  │  │  │     ├─ LanguageConstructSpacingSniff.php
   │     │  │  │  │     ├─ LogicalOperatorSpacingSniff.php
   │     │  │  │  │     ├─ MemberVarSpacingSniff.php
   │     │  │  │  │     ├─ ObjectOperatorSpacingSniff.php
   │     │  │  │  │     ├─ OperatorSpacingSniff.php
   │     │  │  │  │     ├─ PropertyLabelSpacingSniff.php
   │     │  │  │  │     ├─ ScopeClosingBraceSniff.php
   │     │  │  │  │     ├─ ScopeKeywordSpacingSniff.php
   │     │  │  │  │     ├─ SemicolonSpacingSniff.php
   │     │  │  │  │     └─ SuperfluousWhitespaceSniff.php
   │     │  │  │  ├─ Tests
   │     │  │  │  │  ├─ Arrays
   │     │  │  │  │  │  ├─ ArrayBracketSpacingUnitTest.inc
   │     │  │  │  │  │  ├─ ArrayBracketSpacingUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ ArrayBracketSpacingUnitTest.php
   │     │  │  │  │  │  ├─ ArrayDeclarationUnitTest.1.inc
   │     │  │  │  │  │  ├─ ArrayDeclarationUnitTest.1.inc.fixed
   │     │  │  │  │  │  ├─ ArrayDeclarationUnitTest.2.inc
   │     │  │  │  │  │  ├─ ArrayDeclarationUnitTest.2.inc.fixed
   │     │  │  │  │  │  └─ ArrayDeclarationUnitTest.php
   │     │  │  │  │  ├─ CSS
   │     │  │  │  │  │  ├─ ClassDefinitionClosingBraceSpaceUnitTest.css
   │     │  │  │  │  │  ├─ ClassDefinitionClosingBraceSpaceUnitTest.css.fixed
   │     │  │  │  │  │  ├─ ClassDefinitionClosingBraceSpaceUnitTest.php
   │     │  │  │  │  │  ├─ ClassDefinitionNameSpacingUnitTest.css
   │     │  │  │  │  │  ├─ ClassDefinitionNameSpacingUnitTest.php
   │     │  │  │  │  │  ├─ ClassDefinitionOpeningBraceSpaceUnitTest.css
   │     │  │  │  │  │  ├─ ClassDefinitionOpeningBraceSpaceUnitTest.css.fixed
   │     │  │  │  │  │  ├─ ClassDefinitionOpeningBraceSpaceUnitTest.php
   │     │  │  │  │  │  ├─ ColonSpacingUnitTest.css
   │     │  │  │  │  │  ├─ ColonSpacingUnitTest.css.fixed
   │     │  │  │  │  │  ├─ ColonSpacingUnitTest.php
   │     │  │  │  │  │  ├─ ColourDefinitionUnitTest.css
   │     │  │  │  │  │  ├─ ColourDefinitionUnitTest.css.fixed
   │     │  │  │  │  │  ├─ ColourDefinitionUnitTest.php
   │     │  │  │  │  │  ├─ DisallowMultipleStyleDefinitionsUnitTest.css
   │     │  │  │  │  │  ├─ DisallowMultipleStyleDefinitionsUnitTest.css.fixed
   │     │  │  │  │  │  ├─ DisallowMultipleStyleDefinitionsUnitTest.php
   │     │  │  │  │  │  ├─ DuplicateClassDefinitionUnitTest.css
   │     │  │  │  │  │  ├─ DuplicateClassDefinitionUnitTest.php
   │     │  │  │  │  │  ├─ DuplicateStyleDefinitionUnitTest.css
   │     │  │  │  │  │  ├─ DuplicateStyleDefinitionUnitTest.php
   │     │  │  │  │  │  ├─ EmptyClassDefinitionUnitTest.css
   │     │  │  │  │  │  ├─ EmptyClassDefinitionUnitTest.php
   │     │  │  │  │  │  ├─ EmptyStyleDefinitionUnitTest.css
   │     │  │  │  │  │  ├─ EmptyStyleDefinitionUnitTest.php
   │     │  │  │  │  │  ├─ ForbiddenStylesUnitTest.css
   │     │  │  │  │  │  ├─ ForbiddenStylesUnitTest.css.fixed
   │     │  │  │  │  │  ├─ ForbiddenStylesUnitTest.php
   │     │  │  │  │  │  ├─ IndentationUnitTest.1.css
   │     │  │  │  │  │  ├─ IndentationUnitTest.1.css.fixed
   │     │  │  │  │  │  ├─ IndentationUnitTest.2.css
   │     │  │  │  │  │  ├─ IndentationUnitTest.php
   │     │  │  │  │  │  ├─ LowercaseStyleDefinitionUnitTest.css
   │     │  │  │  │  │  ├─ LowercaseStyleDefinitionUnitTest.php
   │     │  │  │  │  │  ├─ MissingColonUnitTest.css
   │     │  │  │  │  │  ├─ MissingColonUnitTest.php
   │     │  │  │  │  │  ├─ NamedColoursUnitTest.css
   │     │  │  │  │  │  ├─ NamedColoursUnitTest.php
   │     │  │  │  │  │  ├─ OpacityUnitTest.css
   │     │  │  │  │  │  ├─ OpacityUnitTest.css.fixed
   │     │  │  │  │  │  ├─ OpacityUnitTest.php
   │     │  │  │  │  │  ├─ SemicolonSpacingUnitTest.css
   │     │  │  │  │  │  ├─ SemicolonSpacingUnitTest.css.fixed
   │     │  │  │  │  │  ├─ SemicolonSpacingUnitTest.php
   │     │  │  │  │  │  ├─ ShorthandSizeUnitTest.css
   │     │  │  │  │  │  ├─ ShorthandSizeUnitTest.css.fixed
   │     │  │  │  │  │  └─ ShorthandSizeUnitTest.php
   │     │  │  │  │  ├─ Classes
   │     │  │  │  │  │  ├─ ClassDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ ClassDeclarationUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ ClassDeclarationUnitTest.php
   │     │  │  │  │  │  ├─ ClassFileNameUnitTest.inc
   │     │  │  │  │  │  ├─ ClassFileNameUnitTest.php
   │     │  │  │  │  │  ├─ DuplicatePropertyUnitTest.js
   │     │  │  │  │  │  ├─ DuplicatePropertyUnitTest.php
   │     │  │  │  │  │  ├─ LowercaseClassKeywordsUnitTest.inc
   │     │  │  │  │  │  ├─ LowercaseClassKeywordsUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ LowercaseClassKeywordsUnitTest.php
   │     │  │  │  │  │  ├─ SelfMemberReferenceUnitTest.inc
   │     │  │  │  │  │  ├─ SelfMemberReferenceUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ SelfMemberReferenceUnitTest.php
   │     │  │  │  │  │  ├─ ValidClassNameUnitTest.inc
   │     │  │  │  │  │  └─ ValidClassNameUnitTest.php
   │     │  │  │  │  ├─ Commenting
   │     │  │  │  │  │  ├─ BlockCommentUnitTest.inc
   │     │  │  │  │  │  ├─ BlockCommentUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ BlockCommentUnitTest.php
   │     │  │  │  │  │  ├─ ClassCommentUnitTest.inc
   │     │  │  │  │  │  ├─ ClassCommentUnitTest.php
   │     │  │  │  │  │  ├─ ClosingDeclarationCommentUnitTest.inc
   │     │  │  │  │  │  ├─ ClosingDeclarationCommentUnitTest.php
   │     │  │  │  │  │  ├─ DocCommentAlignmentUnitTest.inc
   │     │  │  │  │  │  ├─ DocCommentAlignmentUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ DocCommentAlignmentUnitTest.js
   │     │  │  │  │  │  ├─ DocCommentAlignmentUnitTest.js.fixed
   │     │  │  │  │  │  ├─ DocCommentAlignmentUnitTest.php
   │     │  │  │  │  │  ├─ EmptyCatchCommentUnitTest.inc
   │     │  │  │  │  │  ├─ EmptyCatchCommentUnitTest.php
   │     │  │  │  │  │  ├─ FileCommentUnitTest.1.inc
   │     │  │  │  │  │  ├─ FileCommentUnitTest.1.inc.fixed
   │     │  │  │  │  │  ├─ FileCommentUnitTest.1.js
   │     │  │  │  │  │  ├─ FileCommentUnitTest.1.js.fixed
   │     │  │  │  │  │  ├─ FileCommentUnitTest.2.inc
   │     │  │  │  │  │  ├─ FileCommentUnitTest.2.js
   │     │  │  │  │  │  ├─ FileCommentUnitTest.3.inc
   │     │  │  │  │  │  ├─ FileCommentUnitTest.4.inc
   │     │  │  │  │  │  ├─ FileCommentUnitTest.5.inc
   │     │  │  │  │  │  ├─ FileCommentUnitTest.6.inc
   │     │  │  │  │  │  ├─ FileCommentUnitTest.7.inc
   │     │  │  │  │  │  ├─ FileCommentUnitTest.8.inc
   │     │  │  │  │  │  ├─ FileCommentUnitTest.9.inc
   │     │  │  │  │  │  ├─ FileCommentUnitTest.php
   │     │  │  │  │  │  ├─ FunctionCommentThrowTagUnitTest.inc
   │     │  │  │  │  │  ├─ FunctionCommentThrowTagUnitTest.php
   │     │  │  │  │  │  ├─ FunctionCommentUnitTest.inc
   │     │  │  │  │  │  ├─ FunctionCommentUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ FunctionCommentUnitTest.php
   │     │  │  │  │  │  ├─ InlineCommentUnitTest.inc
   │     │  │  │  │  │  ├─ InlineCommentUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ InlineCommentUnitTest.js
   │     │  │  │  │  │  ├─ InlineCommentUnitTest.js.fixed
   │     │  │  │  │  │  ├─ InlineCommentUnitTest.php
   │     │  │  │  │  │  ├─ LongConditionClosingCommentUnitTest.inc
   │     │  │  │  │  │  ├─ LongConditionClosingCommentUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ LongConditionClosingCommentUnitTest.js
   │     │  │  │  │  │  ├─ LongConditionClosingCommentUnitTest.js.fixed
   │     │  │  │  │  │  ├─ LongConditionClosingCommentUnitTest.php
   │     │  │  │  │  │  ├─ PostStatementCommentUnitTest.1.js
   │     │  │  │  │  │  ├─ PostStatementCommentUnitTest.1.js.fixed
   │     │  │  │  │  │  ├─ PostStatementCommentUnitTest.2.js
   │     │  │  │  │  │  ├─ PostStatementCommentUnitTest.inc
   │     │  │  │  │  │  ├─ PostStatementCommentUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ PostStatementCommentUnitTest.php
   │     │  │  │  │  │  ├─ VariableCommentUnitTest.inc
   │     │  │  │  │  │  ├─ VariableCommentUnitTest.inc.fixed
   │     │  │  │  │  │  └─ VariableCommentUnitTest.php
   │     │  │  │  │  ├─ ControlStructures
   │     │  │  │  │  │  ├─ ControlSignatureUnitTest.inc
   │     │  │  │  │  │  ├─ ControlSignatureUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ ControlSignatureUnitTest.js
   │     │  │  │  │  │  ├─ ControlSignatureUnitTest.js.fixed
   │     │  │  │  │  │  ├─ ControlSignatureUnitTest.php
   │     │  │  │  │  │  ├─ ElseIfDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ ElseIfDeclarationUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ ElseIfDeclarationUnitTest.php
   │     │  │  │  │  │  ├─ ForEachLoopDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ ForEachLoopDeclarationUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ ForEachLoopDeclarationUnitTest.php
   │     │  │  │  │  │  ├─ ForLoopDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ ForLoopDeclarationUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ ForLoopDeclarationUnitTest.js
   │     │  │  │  │  │  ├─ ForLoopDeclarationUnitTest.js.fixed
   │     │  │  │  │  │  ├─ ForLoopDeclarationUnitTest.php
   │     │  │  │  │  │  ├─ InlineIfDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ InlineIfDeclarationUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ InlineIfDeclarationUnitTest.php
   │     │  │  │  │  │  ├─ LowercaseDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ LowercaseDeclarationUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ LowercaseDeclarationUnitTest.php
   │     │  │  │  │  │  ├─ SwitchDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ SwitchDeclarationUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ SwitchDeclarationUnitTest.js
   │     │  │  │  │  │  └─ SwitchDeclarationUnitTest.php
   │     │  │  │  │  ├─ Debug
   │     │  │  │  │  │  ├─ JSLintUnitTest.js
   │     │  │  │  │  │  ├─ JSLintUnitTest.php
   │     │  │  │  │  │  ├─ JavaScriptLintUnitTest.js
   │     │  │  │  │  │  └─ JavaScriptLintUnitTest.php
   │     │  │  │  │  ├─ Files
   │     │  │  │  │  │  ├─ FileExtensionUnitTest.1.inc
   │     │  │  │  │  │  ├─ FileExtensionUnitTest.2.inc
   │     │  │  │  │  │  ├─ FileExtensionUnitTest.3.inc
   │     │  │  │  │  │  ├─ FileExtensionUnitTest.4.inc
   │     │  │  │  │  │  ├─ FileExtensionUnitTest.5.inc
   │     │  │  │  │  │  └─ FileExtensionUnitTest.php
   │     │  │  │  │  ├─ Formatting
   │     │  │  │  │  │  ├─ OperatorBracketUnitTest.inc
   │     │  │  │  │  │  ├─ OperatorBracketUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ OperatorBracketUnitTest.js
   │     │  │  │  │  │  ├─ OperatorBracketUnitTest.js.fixed
   │     │  │  │  │  │  └─ OperatorBracketUnitTest.php
   │     │  │  │  │  ├─ Functions
   │     │  │  │  │  │  ├─ FunctionDeclarationArgumentSpacingUnitTest.inc
   │     │  │  │  │  │  ├─ FunctionDeclarationArgumentSpacingUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ FunctionDeclarationArgumentSpacingUnitTest.php
   │     │  │  │  │  │  ├─ FunctionDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ FunctionDeclarationUnitTest.php
   │     │  │  │  │  │  ├─ FunctionDuplicateArgumentUnitTest.inc
   │     │  │  │  │  │  ├─ FunctionDuplicateArgumentUnitTest.php
   │     │  │  │  │  │  ├─ GlobalFunctionUnitTest.inc
   │     │  │  │  │  │  ├─ GlobalFunctionUnitTest.php
   │     │  │  │  │  │  ├─ LowercaseFunctionKeywordsUnitTest.inc
   │     │  │  │  │  │  ├─ LowercaseFunctionKeywordsUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ LowercaseFunctionKeywordsUnitTest.php
   │     │  │  │  │  │  ├─ MultiLineFunctionDeclarationUnitTest.inc
   │     │  │  │  │  │  ├─ MultiLineFunctionDeclarationUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ MultiLineFunctionDeclarationUnitTest.js
   │     │  │  │  │  │  ├─ MultiLineFunctionDeclarationUnitTest.js.fixed
   │     │  │  │  │  │  └─ MultiLineFunctionDeclarationUnitTest.php
   │     │  │  │  │  ├─ NamingConventions
   │     │  │  │  │  │  ├─ ValidFunctionNameUnitTest.inc
   │     │  │  │  │  │  ├─ ValidFunctionNameUnitTest.php
   │     │  │  │  │  │  ├─ ValidVariableNameUnitTest.inc
   │     │  │  │  │  │  └─ ValidVariableNameUnitTest.php
   │     │  │  │  │  ├─ Objects
   │     │  │  │  │  │  ├─ DisallowObjectStringIndexUnitTest.js
   │     │  │  │  │  │  ├─ DisallowObjectStringIndexUnitTest.php
   │     │  │  │  │  │  ├─ ObjectInstantiationUnitTest.inc
   │     │  │  │  │  │  ├─ ObjectInstantiationUnitTest.php
   │     │  │  │  │  │  ├─ ObjectMemberCommaUnitTest.js
   │     │  │  │  │  │  ├─ ObjectMemberCommaUnitTest.js.fixed
   │     │  │  │  │  │  └─ ObjectMemberCommaUnitTest.php
   │     │  │  │  │  ├─ Operators
   │     │  │  │  │  │  ├─ ComparisonOperatorUsageUnitTest.inc
   │     │  │  │  │  │  ├─ ComparisonOperatorUsageUnitTest.js
   │     │  │  │  │  │  ├─ ComparisonOperatorUsageUnitTest.php
   │     │  │  │  │  │  ├─ IncrementDecrementUsageUnitTest.inc
   │     │  │  │  │  │  ├─ IncrementDecrementUsageUnitTest.php
   │     │  │  │  │  │  ├─ ValidLogicalOperatorsUnitTest.inc
   │     │  │  │  │  │  └─ ValidLogicalOperatorsUnitTest.php
   │     │  │  │  │  ├─ PHP
   │     │  │  │  │  │  ├─ CommentedOutCodeUnitTest.css
   │     │  │  │  │  │  ├─ CommentedOutCodeUnitTest.inc
   │     │  │  │  │  │  ├─ CommentedOutCodeUnitTest.php
   │     │  │  │  │  │  ├─ DisallowBooleanStatementUnitTest.inc
   │     │  │  │  │  │  ├─ DisallowBooleanStatementUnitTest.php
   │     │  │  │  │  │  ├─ DisallowComparisonAssignmentUnitTest.inc
   │     │  │  │  │  │  ├─ DisallowComparisonAssignmentUnitTest.php
   │     │  │  │  │  │  ├─ DisallowInlineIfUnitTest.inc
   │     │  │  │  │  │  ├─ DisallowInlineIfUnitTest.js
   │     │  │  │  │  │  ├─ DisallowInlineIfUnitTest.php
   │     │  │  │  │  │  ├─ DisallowMultipleAssignmentsUnitTest.inc
   │     │  │  │  │  │  ├─ DisallowMultipleAssignmentsUnitTest.php
   │     │  │  │  │  │  ├─ DisallowSizeFunctionsInLoopsUnitTest.inc
   │     │  │  │  │  │  ├─ DisallowSizeFunctionsInLoopsUnitTest.js
   │     │  │  │  │  │  ├─ DisallowSizeFunctionsInLoopsUnitTest.php
   │     │  │  │  │  │  ├─ DiscouragedFunctionsUnitTest.inc
   │     │  │  │  │  │  ├─ DiscouragedFunctionsUnitTest.php
   │     │  │  │  │  │  ├─ EmbeddedPhpUnitTest.inc
   │     │  │  │  │  │  ├─ EmbeddedPhpUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ EmbeddedPhpUnitTest.php
   │     │  │  │  │  │  ├─ EvalUnitTest.inc
   │     │  │  │  │  │  ├─ EvalUnitTest.php
   │     │  │  │  │  │  ├─ GlobalKeywordUnitTest.inc
   │     │  │  │  │  │  ├─ GlobalKeywordUnitTest.php
   │     │  │  │  │  │  ├─ HeredocUnitTest.inc
   │     │  │  │  │  │  ├─ HeredocUnitTest.php
   │     │  │  │  │  │  ├─ InnerFunctionsUnitTest.inc
   │     │  │  │  │  │  ├─ InnerFunctionsUnitTest.php
   │     │  │  │  │  │  ├─ LowercasePHPFunctionsUnitTest.inc
   │     │  │  │  │  │  ├─ LowercasePHPFunctionsUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ LowercasePHPFunctionsUnitTest.php
   │     │  │  │  │  │  ├─ NonExecutableCodeUnitTest.1.inc
   │     │  │  │  │  │  ├─ NonExecutableCodeUnitTest.2.inc
   │     │  │  │  │  │  └─ NonExecutableCodeUnitTest.php
   │     │  │  │  │  ├─ Scope
   │     │  │  │  │  │  ├─ MemberVarScopeUnitTest.inc
   │     │  │  │  │  │  ├─ MemberVarScopeUnitTest.php
   │     │  │  │  │  │  ├─ MethodScopeUnitTest.inc
   │     │  │  │  │  │  ├─ MethodScopeUnitTest.php
   │     │  │  │  │  │  ├─ StaticThisUsageUnitTest.inc
   │     │  │  │  │  │  └─ StaticThisUsageUnitTest.php
   │     │  │  │  │  ├─ Strings
   │     │  │  │  │  │  ├─ ConcatenationSpacingUnitTest.inc
   │     │  │  │  │  │  ├─ ConcatenationSpacingUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ ConcatenationSpacingUnitTest.php
   │     │  │  │  │  │  ├─ DoubleQuoteUsageUnitTest.inc
   │     │  │  │  │  │  ├─ DoubleQuoteUsageUnitTest.inc.fixed
   │     │  │  │  │  │  ├─ DoubleQuoteUsageUnitTest.php
   │     │  │  │  │  │  ├─ EchoedStringsUnitTest.inc
   │     │  │  │  │  │  ├─ EchoedStringsUnitTest.inc.fixed
   │     │  │  │  │  │  └─ EchoedStringsUnitTest.php
   │     │  │  │  │  └─ WhiteSpace
   │     │  │  │  │     ├─ CastSpacingUnitTest.inc
   │     │  │  │  │     ├─ CastSpacingUnitTest.inc.fixed
   │     │  │  │  │     ├─ CastSpacingUnitTest.php
   │     │  │  │  │     ├─ ControlStructureSpacingUnitTest.inc
   │     │  │  │  │     ├─ ControlStructureSpacingUnitTest.inc.fixed
   │     │  │  │  │     ├─ ControlStructureSpacingUnitTest.js
   │     │  │  │  │     ├─ ControlStructureSpacingUnitTest.js.fixed
   │     │  │  │  │     ├─ ControlStructureSpacingUnitTest.php
   │     │  │  │  │     ├─ FunctionClosingBraceSpaceUnitTest.inc
   │     │  │  │  │     ├─ FunctionClosingBraceSpaceUnitTest.inc.fixed
   │     │  │  │  │     ├─ FunctionClosingBraceSpaceUnitTest.js
   │     │  │  │  │     ├─ FunctionClosingBraceSpaceUnitTest.js.fixed
   │     │  │  │  │     ├─ FunctionClosingBraceSpaceUnitTest.php
   │     │  │  │  │     ├─ FunctionOpeningBraceSpaceUnitTest.inc
   │     │  │  │  │     ├─ FunctionOpeningBraceSpaceUnitTest.inc.fixed
   │     │  │  │  │     ├─ FunctionOpeningBraceSpaceUnitTest.js
   │     │  │  │  │     ├─ FunctionOpeningBraceSpaceUnitTest.js.fixed
   │     │  │  │  │     ├─ FunctionOpeningBraceSpaceUnitTest.php
   │     │  │  │  │     ├─ FunctionSpacingUnitTest.1.inc
   │     │  │  │  │     ├─ FunctionSpacingUnitTest.1.inc.fixed
   │     │  │  │  │     ├─ FunctionSpacingUnitTest.2.inc
   │     │  │  │  │     ├─ FunctionSpacingUnitTest.2.inc.fixed
   │     │  │  │  │     ├─ FunctionSpacingUnitTest.3.inc
   │     │  │  │  │     ├─ FunctionSpacingUnitTest.3.inc.fixed
   │     │  │  │  │     ├─ FunctionSpacingUnitTest.4.inc
   │     │  │  │  │     ├─ FunctionSpacingUnitTest.5.inc
   │     │  │  │  │     ├─ FunctionSpacingUnitTest.5.inc.fixed
   │     │  │  │  │     ├─ FunctionSpacingUnitTest.6.inc
   │     │  │  │  │     ├─ FunctionSpacingUnitTest.6.inc.fixed
   │     │  │  │  │     ├─ FunctionSpacingUnitTest.7.inc
   │     │  │  │  │     ├─ FunctionSpacingUnitTest.php
   │     │  │  │  │     ├─ LanguageConstructSpacingUnitTest.inc
   │     │  │  │  │     ├─ LanguageConstructSpacingUnitTest.inc.fixed
   │     │  │  │  │     ├─ LanguageConstructSpacingUnitTest.php
   │     │  │  │  │     ├─ LogicalOperatorSpacingUnitTest.inc
   │     │  │  │  │     ├─ LogicalOperatorSpacingUnitTest.inc.fixed
   │     │  │  │  │     ├─ LogicalOperatorSpacingUnitTest.js
   │     │  │  │  │     ├─ LogicalOperatorSpacingUnitTest.js.fixed
   │     │  │  │  │     ├─ LogicalOperatorSpacingUnitTest.php
   │     │  │  │  │     ├─ MemberVarSpacingUnitTest.inc
   │     │  │  │  │     ├─ MemberVarSpacingUnitTest.inc.fixed
   │     │  │  │  │     ├─ MemberVarSpacingUnitTest.php
   │     │  │  │  │     ├─ ObjectOperatorSpacingUnitTest.inc
   │     │  │  │  │     ├─ ObjectOperatorSpacingUnitTest.inc.fixed
   │     │  │  │  │     ├─ ObjectOperatorSpacingUnitTest.php
   │     │  │  │  │     ├─ OperatorSpacingUnitTest.inc
   │     │  │  │  │     ├─ OperatorSpacingUnitTest.inc.fixed
   │     │  │  │  │     ├─ OperatorSpacingUnitTest.js
   │     │  │  │  │     ├─ OperatorSpacingUnitTest.js.fixed
   │     │  │  │  │     ├─ OperatorSpacingUnitTest.php
   │     │  │  │  │     ├─ PropertyLabelSpacingUnitTest.js
   │     │  │  │  │     ├─ PropertyLabelSpacingUnitTest.js.fixed
   │     │  │  │  │     ├─ PropertyLabelSpacingUnitTest.php
   │     │  │  │  │     ├─ ScopeClosingBraceUnitTest.inc
   │     │  │  │  │     ├─ ScopeClosingBraceUnitTest.inc.fixed
   │     │  │  │  │     ├─ ScopeClosingBraceUnitTest.php
   │     │  │  │  │     ├─ ScopeKeywordSpacingUnitTest.inc
   │     │  │  │  │     ├─ ScopeKeywordSpacingUnitTest.inc.fixed
   │     │  │  │  │     ├─ ScopeKeywordSpacingUnitTest.php
   │     │  │  │  │     ├─ SemicolonSpacingUnitTest.inc
   │     │  │  │  │     ├─ SemicolonSpacingUnitTest.inc.fixed
   │     │  │  │  │     ├─ SemicolonSpacingUnitTest.js
   │     │  │  │  │     ├─ SemicolonSpacingUnitTest.js.fixed
   │     │  │  │  │     ├─ SemicolonSpacingUnitTest.php
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.1.css
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.1.css.fixed
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.1.inc
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.1.inc.fixed
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.1.js
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.1.js.fixed
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.2.css
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.2.css.fixed
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.2.inc
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.2.inc.fixed
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.2.js
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.2.js.fixed
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.3.css
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.3.css.fixed
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.3.inc
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.3.inc.fixed
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.3.js
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.3.js.fixed
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.4.inc
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.4.inc.fixed
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.5.inc
   │     │  │  │  │     ├─ SuperfluousWhitespaceUnitTest.5.inc.fixed
   │     │  │  │  │     └─ SuperfluousWhitespaceUnitTest.php
   │     │  │  │  └─ ruleset.xml
   │     │  │  └─ Zend
   │     │  │     ├─ Docs
   │     │  │     │  ├─ Debug
   │     │  │     │  │  └─ CodeAnalyzerStandard.xml
   │     │  │     │  ├─ Files
   │     │  │     │  │  └─ ClosingTagStandard.xml
   │     │  │     │  └─ NamingConventions
   │     │  │     │     └─ ValidVariableNameStandard.xml
   │     │  │     ├─ Sniffs
   │     │  │     │  ├─ Debug
   │     │  │     │  │  └─ CodeAnalyzerSniff.php
   │     │  │     │  ├─ Files
   │     │  │     │  │  └─ ClosingTagSniff.php
   │     │  │     │  └─ NamingConventions
   │     │  │     │     └─ ValidVariableNameSniff.php
   │     │  │     ├─ Tests
   │     │  │     │  ├─ Debug
   │     │  │     │  │  ├─ CodeAnalyzerUnitTest.inc
   │     │  │     │  │  └─ CodeAnalyzerUnitTest.php
   │     │  │     │  ├─ Files
   │     │  │     │  │  ├─ ClosingTagUnitTest.1.inc
   │     │  │     │  │  ├─ ClosingTagUnitTest.1.inc.fixed
   │     │  │     │  │  ├─ ClosingTagUnitTest.2.inc
   │     │  │     │  │  ├─ ClosingTagUnitTest.3.inc
   │     │  │     │  │  ├─ ClosingTagUnitTest.3.inc.fixed
   │     │  │     │  │  ├─ ClosingTagUnitTest.4.inc
   │     │  │     │  │  ├─ ClosingTagUnitTest.4.inc.fixed
   │     │  │     │  │  ├─ ClosingTagUnitTest.5.inc
   │     │  │     │  │  ├─ ClosingTagUnitTest.5.inc.fixed
   │     │  │     │  │  ├─ ClosingTagUnitTest.6.inc
   │     │  │     │  │  ├─ ClosingTagUnitTest.6.inc.fixed
   │     │  │     │  │  ├─ ClosingTagUnitTest.7.inc
   │     │  │     │  │  ├─ ClosingTagUnitTest.7.inc.fixed
   │     │  │     │  │  └─ ClosingTagUnitTest.php
   │     │  │     │  └─ NamingConventions
   │     │  │     │     ├─ ValidVariableNameUnitTest.inc
   │     │  │     │     └─ ValidVariableNameUnitTest.php
   │     │  │     └─ ruleset.xml
   │     │  ├─ Tokenizers
   │     │  │  ├─ CSS.php
   │     │  │  ├─ Comment.php
   │     │  │  ├─ JS.php
   │     │  │  ├─ PHP.php
   │     │  │  └─ Tokenizer.php
   │     │  └─ Util
   │     │     ├─ Cache.php
   │     │     ├─ Common.php
   │     │     ├─ Standards.php
   │     │     ├─ Timing.php
   │     │     └─ Tokens.php
   │     └─ tests
   │        ├─ AllTests.php
   │        ├─ Core
   │        │  ├─ AbstractMethodUnitTest.php
   │        │  ├─ AllTests.php
   │        │  ├─ Autoloader
   │        │  │  ├─ DetermineLoadedClassTest.php
   │        │  │  └─ TestFiles
   │        │  │     ├─ A.inc
   │        │  │     ├─ B.inc
   │        │  │     ├─ C.inc
   │        │  │     └─ Sub
   │        │  │        └─ C.inc
   │        │  ├─ ErrorSuppressionTest.php
   │        │  ├─ File
   │        │  │  ├─ FindEndOfStatementTest.inc
   │        │  │  ├─ FindEndOfStatementTest.php
   │        │  │  ├─ FindExtendedClassNameTest.inc
   │        │  │  ├─ FindExtendedClassNameTest.php
   │        │  │  ├─ FindImplementedInterfaceNamesTest.inc
   │        │  │  ├─ FindImplementedInterfaceNamesTest.php
   │        │  │  ├─ FindStartOfStatementTest.inc
   │        │  │  ├─ FindStartOfStatementTest.php
   │        │  │  ├─ GetMemberPropertiesTest.inc
   │        │  │  ├─ GetMemberPropertiesTest.php
   │        │  │  ├─ GetMethodParametersTest.inc
   │        │  │  ├─ GetMethodParametersTest.php
   │        │  │  ├─ GetMethodPropertiesTest.inc
   │        │  │  ├─ GetMethodPropertiesTest.php
   │        │  │  ├─ IsReferenceTest.inc
   │        │  │  └─ IsReferenceTest.php
   │        │  ├─ Filters
   │        │  │  └─ Filter
   │        │  │     ├─ AcceptTest.php
   │        │  │     └─ AcceptTest.xml
   │        │  ├─ IsCamelCapsTest.php
   │        │  ├─ Ruleset
   │        │  │  ├─ RuleInclusionAbsoluteLinuxTest.php
   │        │  │  ├─ RuleInclusionAbsoluteLinuxTest.xml
   │        │  │  ├─ RuleInclusionAbsoluteWindowsTest.php
   │        │  │  ├─ RuleInclusionAbsoluteWindowsTest.xml
   │        │  │  ├─ RuleInclusionTest-include.xml
   │        │  │  ├─ RuleInclusionTest.php
   │        │  │  └─ RuleInclusionTest.xml
   │        │  ├─ Sniffs
   │        │  │  ├─ AbstractArraySniffTest.inc
   │        │  │  ├─ AbstractArraySniffTest.php
   │        │  │  └─ AbstractArraySniffTestable.php
   │        │  └─ Tokenizer
   │        │     ├─ AnonClassParenthesisOwnerTest.inc
   │        │     ├─ AnonClassParenthesisOwnerTest.php
   │        │     ├─ ArrayKeywordTest.inc
   │        │     ├─ ArrayKeywordTest.php
   │        │     ├─ AttributesTest.inc
   │        │     ├─ AttributesTest.php
   │        │     ├─ BackfillEnumTest.inc
   │        │     ├─ BackfillEnumTest.php
   │        │     ├─ BackfillExplicitOctalNotationTest.inc
   │        │     ├─ BackfillExplicitOctalNotationTest.php
   │        │     ├─ BackfillFnTokenTest.inc
   │        │     ├─ BackfillFnTokenTest.php
   │        │     ├─ BackfillMatchTokenTest.inc
   │        │     ├─ BackfillMatchTokenTest.php
   │        │     ├─ BackfillNumericSeparatorTest.inc
   │        │     ├─ BackfillNumericSeparatorTest.php
   │        │     ├─ BackfillReadonlyTest.inc
   │        │     ├─ BackfillReadonlyTest.php
   │        │     ├─ BitwiseOrTest.inc
   │        │     ├─ BitwiseOrTest.php
   │        │     ├─ ContextSensitiveKeywordsTest.inc
   │        │     ├─ ContextSensitiveKeywordsTest.php
   │        │     ├─ DefaultKeywordTest.inc
   │        │     ├─ DefaultKeywordTest.php
   │        │     ├─ DoubleArrowTest.inc
   │        │     ├─ DoubleArrowTest.php
   │        │     ├─ DoubleQuotedStringTest.inc
   │        │     ├─ DoubleQuotedStringTest.php
   │        │     ├─ EnumCaseTest.inc
   │        │     ├─ EnumCaseTest.php
   │        │     ├─ FinallyTest.inc
   │        │     ├─ FinallyTest.php
   │        │     ├─ GotoLabelTest.inc
   │        │     ├─ GotoLabelTest.php
   │        │     ├─ HeredocNowdocCloserTest.inc
   │        │     ├─ HeredocNowdocCloserTest.php
   │        │     ├─ HeredocStringTest.inc
   │        │     ├─ HeredocStringTest.php
   │        │     ├─ NamedFunctionCallArgumentsTest.inc
   │        │     ├─ NamedFunctionCallArgumentsTest.php
   │        │     ├─ NullsafeObjectOperatorTest.inc
   │        │     ├─ NullsafeObjectOperatorTest.php
   │        │     ├─ ScopeSettingWithNamespaceOperatorTest.inc
   │        │     ├─ ScopeSettingWithNamespaceOperatorTest.php
   │        │     ├─ ShortArrayTest.inc
   │        │     ├─ ShortArrayTest.php
   │        │     ├─ StableCommentWhitespaceTest.inc
   │        │     ├─ StableCommentWhitespaceTest.php
   │        │     ├─ StableCommentWhitespaceWinTest.inc
   │        │     ├─ StableCommentWhitespaceWinTest.php
   │        │     ├─ TypeIntersectionTest.inc
   │        │     ├─ TypeIntersectionTest.php
   │        │     ├─ UndoNamespacedNameSingleTokenTest.inc
   │        │     └─ UndoNamespacedNameSingleTokenTest.php
   │        ├─ FileList.php
   │        ├─ Standards
   │        │  ├─ AbstractSniffUnitTest.php
   │        │  └─ AllSniffs.php
   │        ├─ TestSuite.php
   │        ├─ TestSuite7.php
   │        └─ bootstrap.php
   ├─ symfony
   │  ├─ config
   │  │  ├─ Builder
   │  │  │  ├─ ClassBuilder.php
   │  │  │  ├─ ConfigBuilderGenerator.php
   │  │  │  ├─ ConfigBuilderGeneratorInterface.php
   │  │  │  ├─ ConfigBuilderInterface.php
   │  │  │  ├─ Method.php
   │  │  │  └─ Property.php
   │  │  ├─ CHANGELOG.md
   │  │  ├─ ConfigCache.php
   │  │  ├─ ConfigCacheFactory.php
   │  │  ├─ ConfigCacheFactoryInterface.php
   │  │  ├─ ConfigCacheInterface.php
   │  │  ├─ Definition
   │  │  │  ├─ ArrayNode.php
   │  │  │  ├─ BaseNode.php
   │  │  │  ├─ BooleanNode.php
   │  │  │  ├─ Builder
   │  │  │  │  ├─ ArrayNodeDefinition.php
   │  │  │  │  ├─ BooleanNodeDefinition.php
   │  │  │  │  ├─ BuilderAwareInterface.php
   │  │  │  │  ├─ EnumNodeDefinition.php
   │  │  │  │  ├─ ExprBuilder.php
   │  │  │  │  ├─ FloatNodeDefinition.php
   │  │  │  │  ├─ IntegerNodeDefinition.php
   │  │  │  │  ├─ MergeBuilder.php
   │  │  │  │  ├─ NodeBuilder.php
   │  │  │  │  ├─ NodeDefinition.php
   │  │  │  │  ├─ NodeParentInterface.php
   │  │  │  │  ├─ NormalizationBuilder.php
   │  │  │  │  ├─ NumericNodeDefinition.php
   │  │  │  │  ├─ ParentNodeDefinitionInterface.php
   │  │  │  │  ├─ ScalarNodeDefinition.php
   │  │  │  │  ├─ TreeBuilder.php
   │  │  │  │  ├─ ValidationBuilder.php
   │  │  │  │  └─ VariableNodeDefinition.php
   │  │  │  ├─ ConfigurableInterface.php
   │  │  │  ├─ Configuration.php
   │  │  │  ├─ ConfigurationInterface.php
   │  │  │  ├─ Configurator
   │  │  │  │  └─ DefinitionConfigurator.php
   │  │  │  ├─ Dumper
   │  │  │  │  ├─ XmlReferenceDumper.php
   │  │  │  │  └─ YamlReferenceDumper.php
   │  │  │  ├─ EnumNode.php
   │  │  │  ├─ Exception
   │  │  │  │  ├─ DuplicateKeyException.php
   │  │  │  │  ├─ Exception.php
   │  │  │  │  ├─ ForbiddenOverwriteException.php
   │  │  │  │  ├─ InvalidConfigurationException.php
   │  │  │  │  ├─ InvalidDefinitionException.php
   │  │  │  │  ├─ InvalidTypeException.php
   │  │  │  │  └─ UnsetKeyException.php
   │  │  │  ├─ FloatNode.php
   │  │  │  ├─ IntegerNode.php
   │  │  │  ├─ Loader
   │  │  │  │  └─ DefinitionFileLoader.php
   │  │  │  ├─ NodeInterface.php
   │  │  │  ├─ NumericNode.php
   │  │  │  ├─ Processor.php
   │  │  │  ├─ PrototypeNodeInterface.php
   │  │  │  ├─ PrototypedArrayNode.php
   │  │  │  ├─ ScalarNode.php
   │  │  │  └─ VariableNode.php
   │  │  ├─ Exception
   │  │  │  ├─ FileLoaderImportCircularReferenceException.php
   │  │  │  ├─ FileLocatorFileNotFoundException.php
   │  │  │  └─ LoaderLoadException.php
   │  │  ├─ FileLocator.php
   │  │  ├─ FileLocatorInterface.php
   │  │  ├─ LICENSE
   │  │  ├─ Loader
   │  │  │  ├─ DelegatingLoader.php
   │  │  │  ├─ DirectoryAwareLoaderInterface.php
   │  │  │  ├─ FileLoader.php
   │  │  │  ├─ GlobFileLoader.php
   │  │  │  ├─ Loader.php
   │  │  │  ├─ LoaderInterface.php
   │  │  │  ├─ LoaderResolver.php
   │  │  │  ├─ LoaderResolverInterface.php
   │  │  │  └─ ParamConfigurator.php
   │  │  ├─ README.md
   │  │  ├─ Resource
   │  │  │  ├─ ClassExistenceResource.php
   │  │  │  ├─ ComposerResource.php
   │  │  │  ├─ DirectoryResource.php
   │  │  │  ├─ FileExistenceResource.php
   │  │  │  ├─ FileResource.php
   │  │  │  ├─ GlobResource.php
   │  │  │  ├─ ReflectionClassResource.php
   │  │  │  ├─ ResourceInterface.php
   │  │  │  ├─ SelfCheckingResourceChecker.php
   │  │  │  └─ SelfCheckingResourceInterface.php
   │  │  ├─ ResourceCheckerConfigCache.php
   │  │  ├─ ResourceCheckerConfigCacheFactory.php
   │  │  ├─ ResourceCheckerInterface.php
   │  │  ├─ Util
   │  │  │  ├─ Exception
   │  │  │  │  ├─ InvalidXmlException.php
   │  │  │  │  └─ XmlParsingException.php
   │  │  │  └─ XmlUtils.php
   │  │  └─ composer.json
   │  ├─ console
   │  │  ├─ Application.php
   │  │  ├─ Attribute
   │  │  │  └─ AsCommand.php
   │  │  ├─ CHANGELOG.md
   │  │  ├─ CI
   │  │  │  └─ GithubActionReporter.php
   │  │  ├─ Color.php
   │  │  ├─ Command
   │  │  │  ├─ Command.php
   │  │  │  ├─ CompleteCommand.php
   │  │  │  ├─ DumpCompletionCommand.php
   │  │  │  ├─ HelpCommand.php
   │  │  │  ├─ LazyCommand.php
   │  │  │  ├─ ListCommand.php
   │  │  │  ├─ LockableTrait.php
   │  │  │  └─ SignalableCommandInterface.php
   │  │  ├─ CommandLoader
   │  │  │  ├─ CommandLoaderInterface.php
   │  │  │  ├─ ContainerCommandLoader.php
   │  │  │  └─ FactoryCommandLoader.php
   │  │  ├─ Completion
   │  │  │  ├─ CompletionInput.php
   │  │  │  ├─ CompletionSuggestions.php
   │  │  │  ├─ Output
   │  │  │  │  ├─ BashCompletionOutput.php
   │  │  │  │  ├─ CompletionOutputInterface.php
   │  │  │  │  ├─ FishCompletionOutput.php
   │  │  │  │  └─ ZshCompletionOutput.php
   │  │  │  └─ Suggestion.php
   │  │  ├─ ConsoleEvents.php
   │  │  ├─ Cursor.php
   │  │  ├─ DependencyInjection
   │  │  │  └─ AddConsoleCommandPass.php
   │  │  ├─ Descriptor
   │  │  │  ├─ ApplicationDescription.php
   │  │  │  ├─ Descriptor.php
   │  │  │  ├─ DescriptorInterface.php
   │  │  │  ├─ JsonDescriptor.php
   │  │  │  ├─ MarkdownDescriptor.php
   │  │  │  ├─ TextDescriptor.php
   │  │  │  └─ XmlDescriptor.php
   │  │  ├─ Event
   │  │  │  ├─ ConsoleCommandEvent.php
   │  │  │  ├─ ConsoleErrorEvent.php
   │  │  │  ├─ ConsoleEvent.php
   │  │  │  ├─ ConsoleSignalEvent.php
   │  │  │  └─ ConsoleTerminateEvent.php
   │  │  ├─ EventListener
   │  │  │  └─ ErrorListener.php
   │  │  ├─ Exception
   │  │  │  ├─ CommandNotFoundException.php
   │  │  │  ├─ ExceptionInterface.php
   │  │  │  ├─ InvalidArgumentException.php
   │  │  │  ├─ InvalidOptionException.php
   │  │  │  ├─ LogicException.php
   │  │  │  ├─ MissingInputException.php
   │  │  │  ├─ NamespaceNotFoundException.php
   │  │  │  └─ RuntimeException.php
   │  │  ├─ Formatter
   │  │  │  ├─ NullOutputFormatter.php
   │  │  │  ├─ NullOutputFormatterStyle.php
   │  │  │  ├─ OutputFormatter.php
   │  │  │  ├─ OutputFormatterInterface.php
   │  │  │  ├─ OutputFormatterStyle.php
   │  │  │  ├─ OutputFormatterStyleInterface.php
   │  │  │  ├─ OutputFormatterStyleStack.php
   │  │  │  └─ WrappableOutputFormatterInterface.php
   │  │  ├─ Helper
   │  │  │  ├─ DebugFormatterHelper.php
   │  │  │  ├─ DescriptorHelper.php
   │  │  │  ├─ Dumper.php
   │  │  │  ├─ FormatterHelper.php
   │  │  │  ├─ Helper.php
   │  │  │  ├─ HelperInterface.php
   │  │  │  ├─ HelperSet.php
   │  │  │  ├─ InputAwareHelper.php
   │  │  │  ├─ OutputWrapper.php
   │  │  │  ├─ ProcessHelper.php
   │  │  │  ├─ ProgressBar.php
   │  │  │  ├─ ProgressIndicator.php
   │  │  │  ├─ QuestionHelper.php
   │  │  │  ├─ SymfonyQuestionHelper.php
   │  │  │  ├─ Table.php
   │  │  │  ├─ TableCell.php
   │  │  │  ├─ TableCellStyle.php
   │  │  │  ├─ TableRows.php
   │  │  │  ├─ TableSeparator.php
   │  │  │  └─ TableStyle.php
   │  │  ├─ Input
   │  │  │  ├─ ArgvInput.php
   │  │  │  ├─ ArrayInput.php
   │  │  │  ├─ Input.php
   │  │  │  ├─ InputArgument.php
   │  │  │  ├─ InputAwareInterface.php
   │  │  │  ├─ InputDefinition.php
   │  │  │  ├─ InputInterface.php
   │  │  │  ├─ InputOption.php
   │  │  │  ├─ StreamableInputInterface.php
   │  │  │  └─ StringInput.php
   │  │  ├─ LICENSE
   │  │  ├─ Logger
   │  │  │  └─ ConsoleLogger.php
   │  │  ├─ Output
   │  │  │  ├─ AnsiColorMode.php
   │  │  │  ├─ BufferedOutput.php
   │  │  │  ├─ ConsoleOutput.php
   │  │  │  ├─ ConsoleOutputInterface.php
   │  │  │  ├─ ConsoleSectionOutput.php
   │  │  │  ├─ NullOutput.php
   │  │  │  ├─ Output.php
   │  │  │  ├─ OutputInterface.php
   │  │  │  ├─ StreamOutput.php
   │  │  │  └─ TrimmedBufferOutput.php
   │  │  ├─ Question
   │  │  │  ├─ ChoiceQuestion.php
   │  │  │  ├─ ConfirmationQuestion.php
   │  │  │  └─ Question.php
   │  │  ├─ README.md
   │  │  ├─ Resources
   │  │  │  ├─ bin
   │  │  │  │  └─ hiddeninput.exe
   │  │  │  ├─ completion.bash
   │  │  │  ├─ completion.fish
   │  │  │  └─ completion.zsh
   │  │  ├─ SignalRegistry
   │  │  │  └─ SignalRegistry.php
   │  │  ├─ SingleCommandApplication.php
   │  │  ├─ Style
   │  │  │  ├─ OutputStyle.php
   │  │  │  ├─ StyleInterface.php
   │  │  │  └─ SymfonyStyle.php
   │  │  ├─ Terminal.php
   │  │  ├─ Tester
   │  │  │  ├─ ApplicationTester.php
   │  │  │  ├─ CommandCompletionTester.php
   │  │  │  ├─ CommandTester.php
   │  │  │  ├─ Constraint
   │  │  │  │  └─ CommandIsSuccessful.php
   │  │  │  └─ TesterTrait.php
   │  │  └─ composer.json
   │  ├─ dependency-injection
   │  │  ├─ Alias.php
   │  │  ├─ Argument
   │  │  │  ├─ AbstractArgument.php
   │  │  │  ├─ ArgumentInterface.php
   │  │  │  ├─ BoundArgument.php
   │  │  │  ├─ IteratorArgument.php
   │  │  │  ├─ ReferenceSetArgumentTrait.php
   │  │  │  ├─ RewindableGenerator.php
   │  │  │  ├─ ServiceClosureArgument.php
   │  │  │  ├─ ServiceLocator.php
   │  │  │  ├─ ServiceLocatorArgument.php
   │  │  │  └─ TaggedIteratorArgument.php
   │  │  ├─ Attribute
   │  │  │  ├─ AsDecorator.php
   │  │  │  ├─ AsTaggedItem.php
   │  │  │  ├─ Autoconfigure.php
   │  │  │  ├─ AutoconfigureTag.php
   │  │  │  ├─ Autowire.php
   │  │  │  ├─ MapDecorated.php
   │  │  │  ├─ TaggedIterator.php
   │  │  │  ├─ TaggedLocator.php
   │  │  │  ├─ Target.php
   │  │  │  └─ When.php
   │  │  ├─ CHANGELOG.md
   │  │  ├─ ChildDefinition.php
   │  │  ├─ Compiler
   │  │  │  ├─ AbstractRecursivePass.php
   │  │  │  ├─ AliasDeprecatedPublicServicesPass.php
   │  │  │  ├─ AnalyzeServiceReferencesPass.php
   │  │  │  ├─ AttributeAutoconfigurationPass.php
   │  │  │  ├─ AutoAliasServicePass.php
   │  │  │  ├─ AutowireAsDecoratorPass.php
   │  │  │  ├─ AutowirePass.php
   │  │  │  ├─ AutowireRequiredMethodsPass.php
   │  │  │  ├─ AutowireRequiredPropertiesPass.php
   │  │  │  ├─ CheckArgumentsValidityPass.php
   │  │  │  ├─ CheckCircularReferencesPass.php
   │  │  │  ├─ CheckDefinitionValidityPass.php
   │  │  │  ├─ CheckExceptionOnInvalidReferenceBehaviorPass.php
   │  │  │  ├─ CheckReferenceValidityPass.php
   │  │  │  ├─ CheckTypeDeclarationsPass.php
   │  │  │  ├─ Compiler.php
   │  │  │  ├─ CompilerPassInterface.php
   │  │  │  ├─ DecoratorServicePass.php
   │  │  │  ├─ DefinitionErrorExceptionPass.php
   │  │  │  ├─ ExtensionCompilerPass.php
   │  │  │  ├─ InlineServiceDefinitionsPass.php
   │  │  │  ├─ MergeExtensionConfigurationPass.php
   │  │  │  ├─ PassConfig.php
   │  │  │  ├─ PriorityTaggedServiceTrait.php
   │  │  │  ├─ RegisterAutoconfigureAttributesPass.php
   │  │  │  ├─ RegisterEnvVarProcessorsPass.php
   │  │  │  ├─ RegisterReverseContainerPass.php
   │  │  │  ├─ RegisterServiceSubscribersPass.php
   │  │  │  ├─ RemoveAbstractDefinitionsPass.php
   │  │  │  ├─ RemovePrivateAliasesPass.php
   │  │  │  ├─ RemoveUnusedDefinitionsPass.php
   │  │  │  ├─ ReplaceAliasByActualDefinitionPass.php
   │  │  │  ├─ ResolveBindingsPass.php
   │  │  │  ├─ ResolveChildDefinitionsPass.php
   │  │  │  ├─ ResolveClassPass.php
   │  │  │  ├─ ResolveDecoratorStackPass.php
   │  │  │  ├─ ResolveEnvPlaceholdersPass.php
   │  │  │  ├─ ResolveFactoryClassPass.php
   │  │  │  ├─ ResolveHotPathPass.php
   │  │  │  ├─ ResolveInstanceofConditionalsPass.php
   │  │  │  ├─ ResolveInvalidReferencesPass.php
   │  │  │  ├─ ResolveNamedArgumentsPass.php
   │  │  │  ├─ ResolveNoPreloadPass.php
   │  │  │  ├─ ResolveParameterPlaceHoldersPass.php
   │  │  │  ├─ ResolveReferencesToAliasesPass.php
   │  │  │  ├─ ResolveServiceSubscribersPass.php
   │  │  │  ├─ ResolveTaggedIteratorArgumentPass.php
   │  │  │  ├─ ServiceLocatorTagPass.php
   │  │  │  ├─ ServiceReferenceGraph.php
   │  │  │  ├─ ServiceReferenceGraphEdge.php
   │  │  │  ├─ ServiceReferenceGraphNode.php
   │  │  │  └─ ValidateEnvPlaceholdersPass.php
   │  │  ├─ Config
   │  │  │  ├─ ContainerParametersResource.php
   │  │  │  └─ ContainerParametersResourceChecker.php
   │  │  ├─ Container.php
   │  │  ├─ ContainerAwareInterface.php
   │  │  ├─ ContainerAwareTrait.php
   │  │  ├─ ContainerBuilder.php
   │  │  ├─ ContainerInterface.php
   │  │  ├─ Definition.php
   │  │  ├─ Dumper
   │  │  │  ├─ Dumper.php
   │  │  │  ├─ DumperInterface.php
   │  │  │  ├─ GraphvizDumper.php
   │  │  │  ├─ PhpDumper.php
   │  │  │  ├─ Preloader.php
   │  │  │  ├─ XmlDumper.php
   │  │  │  └─ YamlDumper.php
   │  │  ├─ EnvVarLoaderInterface.php
   │  │  ├─ EnvVarProcessor.php
   │  │  ├─ EnvVarProcessorInterface.php
   │  │  ├─ Exception
   │  │  │  ├─ AutowiringFailedException.php
   │  │  │  ├─ BadMethodCallException.php
   │  │  │  ├─ EnvNotFoundException.php
   │  │  │  ├─ EnvParameterException.php
   │  │  │  ├─ ExceptionInterface.php
   │  │  │  ├─ InvalidArgumentException.php
   │  │  │  ├─ InvalidParameterTypeException.php
   │  │  │  ├─ LogicException.php
   │  │  │  ├─ OutOfBoundsException.php
   │  │  │  ├─ ParameterCircularReferenceException.php
   │  │  │  ├─ ParameterNotFoundException.php
   │  │  │  ├─ RuntimeException.php
   │  │  │  ├─ ServiceCircularReferenceException.php
   │  │  │  └─ ServiceNotFoundException.php
   │  │  ├─ ExpressionLanguage.php
   │  │  ├─ ExpressionLanguageProvider.php
   │  │  ├─ Extension
   │  │  │  ├─ AbstractExtension.php
   │  │  │  ├─ ConfigurableExtensionInterface.php
   │  │  │  ├─ ConfigurationExtensionInterface.php
   │  │  │  ├─ Extension.php
   │  │  │  ├─ ExtensionInterface.php
   │  │  │  ├─ ExtensionTrait.php
   │  │  │  └─ PrependExtensionInterface.php
   │  │  ├─ LICENSE
   │  │  ├─ LazyProxy
   │  │  │  ├─ Instantiator
   │  │  │  │  ├─ InstantiatorInterface.php
   │  │  │  │  ├─ LazyServiceInstantiator.php
   │  │  │  │  └─ RealServiceInstantiator.php
   │  │  │  ├─ PhpDumper
   │  │  │  │  ├─ DumperInterface.php
   │  │  │  │  ├─ LazyServiceDumper.php
   │  │  │  │  └─ NullDumper.php
   │  │  │  └─ ProxyHelper.php
   │  │  ├─ Loader
   │  │  │  ├─ ClosureLoader.php
   │  │  │  ├─ Configurator
   │  │  │  │  ├─ AbstractConfigurator.php
   │  │  │  │  ├─ AbstractServiceConfigurator.php
   │  │  │  │  ├─ AliasConfigurator.php
   │  │  │  │  ├─ ClosureReferenceConfigurator.php
   │  │  │  │  ├─ ContainerConfigurator.php
   │  │  │  │  ├─ DefaultsConfigurator.php
   │  │  │  │  ├─ EnvConfigurator.php
   │  │  │  │  ├─ InlineServiceConfigurator.php
   │  │  │  │  ├─ InstanceofConfigurator.php
   │  │  │  │  ├─ ParametersConfigurator.php
   │  │  │  │  ├─ PrototypeConfigurator.php
   │  │  │  │  ├─ ReferenceConfigurator.php
   │  │  │  │  ├─ ServiceConfigurator.php
   │  │  │  │  ├─ ServicesConfigurator.php
   │  │  │  │  └─ Traits
   │  │  │  │     ├─ AbstractTrait.php
   │  │  │  │     ├─ ArgumentTrait.php
   │  │  │  │     ├─ AutoconfigureTrait.php
   │  │  │  │     ├─ AutowireTrait.php
   │  │  │  │     ├─ BindTrait.php
   │  │  │  │     ├─ CallTrait.php
   │  │  │  │     ├─ ClassTrait.php
   │  │  │  │     ├─ ConfiguratorTrait.php
   │  │  │  │     ├─ DecorateTrait.php
   │  │  │  │     ├─ DeprecateTrait.php
   │  │  │  │     ├─ FactoryTrait.php
   │  │  │  │     ├─ FileTrait.php
   │  │  │  │     ├─ LazyTrait.php
   │  │  │  │     ├─ ParentTrait.php
   │  │  │  │     ├─ PropertyTrait.php
   │  │  │  │     ├─ PublicTrait.php
   │  │  │  │     ├─ ShareTrait.php
   │  │  │  │     ├─ SyntheticTrait.php
   │  │  │  │     └─ TagTrait.php
   │  │  │  ├─ DirectoryLoader.php
   │  │  │  ├─ FileLoader.php
   │  │  │  ├─ GlobFileLoader.php
   │  │  │  ├─ IniFileLoader.php
   │  │  │  ├─ PhpFileLoader.php
   │  │  │  ├─ XmlFileLoader.php
   │  │  │  ├─ YamlFileLoader.php
   │  │  │  └─ schema
   │  │  │     └─ dic
   │  │  │        └─ services
   │  │  │           └─ services-1.0.xsd
   │  │  ├─ Parameter.php
   │  │  ├─ ParameterBag
   │  │  │  ├─ ContainerBag.php
   │  │  │  ├─ ContainerBagInterface.php
   │  │  │  ├─ EnvPlaceholderParameterBag.php
   │  │  │  ├─ FrozenParameterBag.php
   │  │  │  ├─ ParameterBag.php
   │  │  │  └─ ParameterBagInterface.php
   │  │  ├─ README.md
   │  │  ├─ Reference.php
   │  │  ├─ ReverseContainer.php
   │  │  ├─ ServiceLocator.php
   │  │  ├─ TaggedContainerInterface.php
   │  │  ├─ TypedReference.php
   │  │  ├─ Variable.php
   │  │  └─ composer.json
   │  ├─ deprecation-contracts
   │  │  ├─ CHANGELOG.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ composer.json
   │  │  └─ function.php
   │  ├─ dotenv
   │  │  ├─ CHANGELOG.md
   │  │  ├─ Command
   │  │  │  ├─ DebugCommand.php
   │  │  │  └─ DotenvDumpCommand.php
   │  │  ├─ Dotenv.php
   │  │  ├─ Exception
   │  │  │  ├─ ExceptionInterface.php
   │  │  │  ├─ FormatException.php
   │  │  │  ├─ FormatExceptionContext.php
   │  │  │  └─ PathException.php
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  └─ composer.json
   │  ├─ event-dispatcher
   │  │  ├─ Attribute
   │  │  │  └─ AsEventListener.php
   │  │  ├─ CHANGELOG.md
   │  │  ├─ Debug
   │  │  │  ├─ TraceableEventDispatcher.php
   │  │  │  └─ WrappedListener.php
   │  │  ├─ DependencyInjection
   │  │  │  ├─ AddEventAliasesPass.php
   │  │  │  └─ RegisterListenersPass.php
   │  │  ├─ EventDispatcher.php
   │  │  ├─ EventDispatcherInterface.php
   │  │  ├─ EventSubscriberInterface.php
   │  │  ├─ GenericEvent.php
   │  │  ├─ ImmutableEventDispatcher.php
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  └─ composer.json
   │  ├─ event-dispatcher-contracts
   │  │  ├─ CHANGELOG.md
   │  │  ├─ Event.php
   │  │  ├─ EventDispatcherInterface.php
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  └─ composer.json
   │  ├─ filesystem
   │  │  ├─ CHANGELOG.md
   │  │  ├─ Exception
   │  │  │  ├─ ExceptionInterface.php
   │  │  │  ├─ FileNotFoundException.php
   │  │  │  ├─ IOException.php
   │  │  │  ├─ IOExceptionInterface.php
   │  │  │  ├─ InvalidArgumentException.php
   │  │  │  └─ RuntimeException.php
   │  │  ├─ Filesystem.php
   │  │  ├─ LICENSE
   │  │  ├─ Path.php
   │  │  ├─ README.md
   │  │  └─ composer.json
   │  ├─ finder
   │  │  ├─ CHANGELOG.md
   │  │  ├─ Comparator
   │  │  │  ├─ Comparator.php
   │  │  │  ├─ DateComparator.php
   │  │  │  └─ NumberComparator.php
   │  │  ├─ Exception
   │  │  │  ├─ AccessDeniedException.php
   │  │  │  └─ DirectoryNotFoundException.php
   │  │  ├─ Finder.php
   │  │  ├─ Gitignore.php
   │  │  ├─ Glob.php
   │  │  ├─ Iterator
   │  │  │  ├─ CustomFilterIterator.php
   │  │  │  ├─ DateRangeFilterIterator.php
   │  │  │  ├─ DepthRangeFilterIterator.php
   │  │  │  ├─ ExcludeDirectoryFilterIterator.php
   │  │  │  ├─ FileTypeFilterIterator.php
   │  │  │  ├─ FilecontentFilterIterator.php
   │  │  │  ├─ FilenameFilterIterator.php
   │  │  │  ├─ LazyIterator.php
   │  │  │  ├─ MultiplePcreFilterIterator.php
   │  │  │  ├─ PathFilterIterator.php
   │  │  │  ├─ RecursiveDirectoryIterator.php
   │  │  │  ├─ SizeRangeFilterIterator.php
   │  │  │  ├─ SortableIterator.php
   │  │  │  └─ VcsIgnoredFilterIterator.php
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SplFileInfo.php
   │  │  └─ composer.json
   │  ├─ options-resolver
   │  │  ├─ CHANGELOG.md
   │  │  ├─ Debug
   │  │  │  └─ OptionsResolverIntrospector.php
   │  │  ├─ Exception
   │  │  │  ├─ AccessException.php
   │  │  │  ├─ ExceptionInterface.php
   │  │  │  ├─ InvalidArgumentException.php
   │  │  │  ├─ InvalidOptionsException.php
   │  │  │  ├─ MissingOptionsException.php
   │  │  │  ├─ NoConfigurationException.php
   │  │  │  ├─ NoSuchOptionException.php
   │  │  │  ├─ OptionDefinitionException.php
   │  │  │  └─ UndefinedOptionsException.php
   │  │  ├─ LICENSE
   │  │  ├─ OptionConfigurator.php
   │  │  ├─ Options.php
   │  │  ├─ OptionsResolver.php
   │  │  ├─ README.md
   │  │  └─ composer.json
   │  ├─ polyfill-ctype
   │  │  ├─ Ctype.php
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ bootstrap.php
   │  │  ├─ bootstrap80.php
   │  │  └─ composer.json
   │  ├─ polyfill-intl-grapheme
   │  │  ├─ Grapheme.php
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ bootstrap.php
   │  │  ├─ bootstrap80.php
   │  │  └─ composer.json
   │  ├─ polyfill-intl-normalizer
   │  │  ├─ LICENSE
   │  │  ├─ Normalizer.php
   │  │  ├─ README.md
   │  │  ├─ Resources
   │  │  │  ├─ stubs
   │  │  │  │  └─ Normalizer.php
   │  │  │  └─ unidata
   │  │  │     ├─ canonicalComposition.php
   │  │  │     ├─ canonicalDecomposition.php
   │  │  │     ├─ combiningClass.php
   │  │  │     └─ compatibilityDecomposition.php
   │  │  ├─ bootstrap.php
   │  │  ├─ bootstrap80.php
   │  │  └─ composer.json
   │  ├─ polyfill-mbstring
   │  │  ├─ LICENSE
   │  │  ├─ Mbstring.php
   │  │  ├─ README.md
   │  │  ├─ Resources
   │  │  │  └─ unidata
   │  │  │     ├─ lowerCase.php
   │  │  │     ├─ titleCaseRegexp.php
   │  │  │     └─ upperCase.php
   │  │  ├─ bootstrap.php
   │  │  ├─ bootstrap80.php
   │  │  └─ composer.json
   │  ├─ polyfill-php80
   │  │  ├─ LICENSE
   │  │  ├─ Php80.php
   │  │  ├─ PhpToken.php
   │  │  ├─ README.md
   │  │  ├─ Resources
   │  │  │  └─ stubs
   │  │  │     ├─ Attribute.php
   │  │  │     ├─ PhpToken.php
   │  │  │     ├─ Stringable.php
   │  │  │     ├─ UnhandledMatchError.php
   │  │  │     └─ ValueError.php
   │  │  ├─ bootstrap.php
   │  │  └─ composer.json
   │  ├─ polyfill-php83
   │  │  ├─ LICENSE
   │  │  ├─ Php83.php
   │  │  ├─ README.md
   │  │  ├─ Resources
   │  │  │  └─ stubs
   │  │  │     ├─ DateError.php
   │  │  │     ├─ DateException.php
   │  │  │     ├─ DateInvalidOperationException.php
   │  │  │     ├─ DateInvalidTimeZoneException.php
   │  │  │     ├─ DateMalformedIntervalStringException.php
   │  │  │     ├─ DateMalformedPeriodStringException.php
   │  │  │     ├─ DateMalformedStringException.php
   │  │  │     ├─ DateObjectError.php
   │  │  │     ├─ DateRangeError.php
   │  │  │     ├─ Override.php
   │  │  │     └─ SQLite3Exception.php
   │  │  ├─ bootstrap.php
   │  │  ├─ bootstrap81.php
   │  │  └─ composer.json
   │  ├─ process
   │  │  ├─ CHANGELOG.md
   │  │  ├─ Exception
   │  │  │  ├─ ExceptionInterface.php
   │  │  │  ├─ InvalidArgumentException.php
   │  │  │  ├─ LogicException.php
   │  │  │  ├─ ProcessFailedException.php
   │  │  │  ├─ ProcessSignaledException.php
   │  │  │  ├─ ProcessTimedOutException.php
   │  │  │  └─ RuntimeException.php
   │  │  ├─ ExecutableFinder.php
   │  │  ├─ InputStream.php
   │  │  ├─ LICENSE
   │  │  ├─ PhpExecutableFinder.php
   │  │  ├─ PhpProcess.php
   │  │  ├─ Pipes
   │  │  │  ├─ AbstractPipes.php
   │  │  │  ├─ PipesInterface.php
   │  │  │  ├─ UnixPipes.php
   │  │  │  └─ WindowsPipes.php
   │  │  ├─ Process.php
   │  │  ├─ ProcessUtils.php
   │  │  ├─ README.md
   │  │  └─ composer.json
   │  ├─ service-contracts
   │  │  ├─ Attribute
   │  │  │  ├─ Required.php
   │  │  │  └─ SubscribedService.php
   │  │  ├─ CHANGELOG.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ ResetInterface.php
   │  │  ├─ ServiceLocatorTrait.php
   │  │  ├─ ServiceProviderInterface.php
   │  │  ├─ ServiceSubscriberInterface.php
   │  │  ├─ ServiceSubscriberTrait.php
   │  │  ├─ Test
   │  │  │  └─ ServiceLocatorTest.php
   │  │  └─ composer.json
   │  ├─ string
   │  │  ├─ AbstractString.php
   │  │  ├─ AbstractUnicodeString.php
   │  │  ├─ ByteString.php
   │  │  ├─ CHANGELOG.md
   │  │  ├─ CodePointString.php
   │  │  ├─ Exception
   │  │  │  ├─ ExceptionInterface.php
   │  │  │  ├─ InvalidArgumentException.php
   │  │  │  └─ RuntimeException.php
   │  │  ├─ Inflector
   │  │  │  ├─ EnglishInflector.php
   │  │  │  ├─ FrenchInflector.php
   │  │  │  └─ InflectorInterface.php
   │  │  ├─ LICENSE
   │  │  ├─ LazyString.php
   │  │  ├─ README.md
   │  │  ├─ Resources
   │  │  │  ├─ bin
   │  │  │  ├─ data
   │  │  │  │  ├─ wcswidth_table_wide.php
   │  │  │  │  └─ wcswidth_table_zero.php
   │  │  │  └─ functions.php
   │  │  ├─ Slugger
   │  │  │  ├─ AsciiSlugger.php
   │  │  │  └─ SluggerInterface.php
   │  │  ├─ UnicodeString.php
   │  │  └─ composer.json
   │  ├─ translation-contracts
   │  │  ├─ CHANGELOG.md
   │  │  ├─ LICENSE
   │  │  ├─ LocaleAwareInterface.php
   │  │  ├─ README.md
   │  │  ├─ Test
   │  │  │  └─ TranslatorTest.php
   │  │  ├─ TranslatableInterface.php
   │  │  ├─ TranslatorInterface.php
   │  │  ├─ TranslatorTrait.php
   │  │  └─ composer.json
   │  ├─ validator
   │  │  ├─ Attribute
   │  │  │  └─ HasNamedArguments.php
   │  │  ├─ CHANGELOG.md
   │  │  ├─ Command
   │  │  │  └─ DebugCommand.php
   │  │  ├─ Constraint.php
   │  │  ├─ ConstraintValidator.php
   │  │  ├─ ConstraintValidatorFactory.php
   │  │  ├─ ConstraintValidatorFactoryInterface.php
   │  │  ├─ ConstraintValidatorInterface.php
   │  │  ├─ ConstraintViolation.php
   │  │  ├─ ConstraintViolationInterface.php
   │  │  ├─ ConstraintViolationList.php
   │  │  ├─ ConstraintViolationListInterface.php
   │  │  ├─ Constraints
   │  │  │  ├─ AbstractComparison.php
   │  │  │  ├─ AbstractComparisonValidator.php
   │  │  │  ├─ All.php
   │  │  │  ├─ AllValidator.php
   │  │  │  ├─ AtLeastOneOf.php
   │  │  │  ├─ AtLeastOneOfValidator.php
   │  │  │  ├─ Bic.php
   │  │  │  ├─ BicValidator.php
   │  │  │  ├─ Blank.php
   │  │  │  ├─ BlankValidator.php
   │  │  │  ├─ Callback.php
   │  │  │  ├─ CallbackValidator.php
   │  │  │  ├─ CardScheme.php
   │  │  │  ├─ CardSchemeValidator.php
   │  │  │  ├─ Cascade.php
   │  │  │  ├─ Choice.php
   │  │  │  ├─ ChoiceValidator.php
   │  │  │  ├─ Cidr.php
   │  │  │  ├─ CidrValidator.php
   │  │  │  ├─ Collection.php
   │  │  │  ├─ CollectionValidator.php
   │  │  │  ├─ Composite.php
   │  │  │  ├─ Compound.php
   │  │  │  ├─ CompoundValidator.php
   │  │  │  ├─ Count.php
   │  │  │  ├─ CountValidator.php
   │  │  │  ├─ Country.php
   │  │  │  ├─ CountryValidator.php
   │  │  │  ├─ CssColor.php
   │  │  │  ├─ CssColorValidator.php
   │  │  │  ├─ Currency.php
   │  │  │  ├─ CurrencyValidator.php
   │  │  │  ├─ Date.php
   │  │  │  ├─ DateTime.php
   │  │  │  ├─ DateTimeValidator.php
   │  │  │  ├─ DateValidator.php
   │  │  │  ├─ DisableAutoMapping.php
   │  │  │  ├─ DivisibleBy.php
   │  │  │  ├─ DivisibleByValidator.php
   │  │  │  ├─ Email.php
   │  │  │  ├─ EmailValidator.php
   │  │  │  ├─ EnableAutoMapping.php
   │  │  │  ├─ EqualTo.php
   │  │  │  ├─ EqualToValidator.php
   │  │  │  ├─ Existence.php
   │  │  │  ├─ Expression.php
   │  │  │  ├─ ExpressionLanguageProvider.php
   │  │  │  ├─ ExpressionLanguageSyntax.php
   │  │  │  ├─ ExpressionLanguageSyntaxValidator.php
   │  │  │  ├─ ExpressionSyntax.php
   │  │  │  ├─ ExpressionSyntaxValidator.php
   │  │  │  ├─ ExpressionValidator.php
   │  │  │  ├─ File.php
   │  │  │  ├─ FileValidator.php
   │  │  │  ├─ GreaterThan.php
   │  │  │  ├─ GreaterThanOrEqual.php
   │  │  │  ├─ GreaterThanOrEqualValidator.php
   │  │  │  ├─ GreaterThanValidator.php
   │  │  │  ├─ GroupSequence.php
   │  │  │  ├─ GroupSequenceProvider.php
   │  │  │  ├─ Hostname.php
   │  │  │  ├─ HostnameValidator.php
   │  │  │  ├─ Iban.php
   │  │  │  ├─ IbanValidator.php
   │  │  │  ├─ IdenticalTo.php
   │  │  │  ├─ IdenticalToValidator.php
   │  │  │  ├─ Image.php
   │  │  │  ├─ ImageValidator.php
   │  │  │  ├─ Ip.php
   │  │  │  ├─ IpValidator.php
   │  │  │  ├─ IsFalse.php
   │  │  │  ├─ IsFalseValidator.php
   │  │  │  ├─ IsNull.php
   │  │  │  ├─ IsNullValidator.php
   │  │  │  ├─ IsTrue.php
   │  │  │  ├─ IsTrueValidator.php
   │  │  │  ├─ Isbn.php
   │  │  │  ├─ IsbnValidator.php
   │  │  │  ├─ Isin.php
   │  │  │  ├─ IsinValidator.php
   │  │  │  ├─ Issn.php
   │  │  │  ├─ IssnValidator.php
   │  │  │  ├─ Json.php
   │  │  │  ├─ JsonValidator.php
   │  │  │  ├─ Language.php
   │  │  │  ├─ LanguageValidator.php
   │  │  │  ├─ Length.php
   │  │  │  ├─ LengthValidator.php
   │  │  │  ├─ LessThan.php
   │  │  │  ├─ LessThanOrEqual.php
   │  │  │  ├─ LessThanOrEqualValidator.php
   │  │  │  ├─ LessThanValidator.php
   │  │  │  ├─ Locale.php
   │  │  │  ├─ LocaleValidator.php
   │  │  │  ├─ Luhn.php
   │  │  │  ├─ LuhnValidator.php
   │  │  │  ├─ Negative.php
   │  │  │  ├─ NegativeOrZero.php
   │  │  │  ├─ NoSuspiciousCharacters.php
   │  │  │  ├─ NoSuspiciousCharactersValidator.php
   │  │  │  ├─ NotBlank.php
   │  │  │  ├─ NotBlankValidator.php
   │  │  │  ├─ NotCompromisedPassword.php
   │  │  │  ├─ NotCompromisedPasswordValidator.php
   │  │  │  ├─ NotEqualTo.php
   │  │  │  ├─ NotEqualToValidator.php
   │  │  │  ├─ NotIdenticalTo.php
   │  │  │  ├─ NotIdenticalToValidator.php
   │  │  │  ├─ NotNull.php
   │  │  │  ├─ NotNullValidator.php
   │  │  │  ├─ Optional.php
   │  │  │  ├─ PasswordStrength.php
   │  │  │  ├─ PasswordStrengthValidator.php
   │  │  │  ├─ Positive.php
   │  │  │  ├─ PositiveOrZero.php
   │  │  │  ├─ Range.php
   │  │  │  ├─ RangeValidator.php
   │  │  │  ├─ Regex.php
   │  │  │  ├─ RegexValidator.php
   │  │  │  ├─ Required.php
   │  │  │  ├─ Sequentially.php
   │  │  │  ├─ SequentiallyValidator.php
   │  │  │  ├─ Time.php
   │  │  │  ├─ TimeValidator.php
   │  │  │  ├─ Timezone.php
   │  │  │  ├─ TimezoneValidator.php
   │  │  │  ├─ Traverse.php
   │  │  │  ├─ Type.php
   │  │  │  ├─ TypeValidator.php
   │  │  │  ├─ Ulid.php
   │  │  │  ├─ UlidValidator.php
   │  │  │  ├─ Unique.php
   │  │  │  ├─ UniqueValidator.php
   │  │  │  ├─ Url.php
   │  │  │  ├─ UrlValidator.php
   │  │  │  ├─ Uuid.php
   │  │  │  ├─ UuidValidator.php
   │  │  │  ├─ Valid.php
   │  │  │  ├─ ValidValidator.php
   │  │  │  ├─ When.php
   │  │  │  ├─ WhenValidator.php
   │  │  │  └─ ZeroComparisonConstraintTrait.php
   │  │  ├─ ContainerConstraintValidatorFactory.php
   │  │  ├─ Context
   │  │  │  ├─ ExecutionContext.php
   │  │  │  ├─ ExecutionContextFactory.php
   │  │  │  ├─ ExecutionContextFactoryInterface.php
   │  │  │  └─ ExecutionContextInterface.php
   │  │  ├─ DataCollector
   │  │  │  └─ ValidatorDataCollector.php
   │  │  ├─ DependencyInjection
   │  │  │  ├─ AddAutoMappingConfigurationPass.php
   │  │  │  ├─ AddConstraintValidatorsPass.php
   │  │  │  └─ AddValidatorInitializersPass.php
   │  │  ├─ Exception
   │  │  │  ├─ BadMethodCallException.php
   │  │  │  ├─ ConstraintDefinitionException.php
   │  │  │  ├─ ExceptionInterface.php
   │  │  │  ├─ GroupDefinitionException.php
   │  │  │  ├─ InvalidArgumentException.php
   │  │  │  ├─ InvalidOptionsException.php
   │  │  │  ├─ LogicException.php
   │  │  │  ├─ MappingException.php
   │  │  │  ├─ MissingOptionsException.php
   │  │  │  ├─ NoSuchMetadataException.php
   │  │  │  ├─ OutOfBoundsException.php
   │  │  │  ├─ RuntimeException.php
   │  │  │  ├─ UnexpectedTypeException.php
   │  │  │  ├─ UnexpectedValueException.php
   │  │  │  ├─ UnsupportedMetadataException.php
   │  │  │  ├─ ValidationFailedException.php
   │  │  │  └─ ValidatorException.php
   │  │  ├─ GroupProviderInterface.php
   │  │  ├─ GroupSequenceProviderInterface.php
   │  │  ├─ LICENSE
   │  │  ├─ Mapping
   │  │  │  ├─ AutoMappingStrategy.php
   │  │  │  ├─ CascadingStrategy.php
   │  │  │  ├─ ClassMetadata.php
   │  │  │  ├─ ClassMetadataInterface.php
   │  │  │  ├─ Factory
   │  │  │  │  ├─ BlackHoleMetadataFactory.php
   │  │  │  │  ├─ LazyLoadingMetadataFactory.php
   │  │  │  │  └─ MetadataFactoryInterface.php
   │  │  │  ├─ GenericMetadata.php
   │  │  │  ├─ GetterMetadata.php
   │  │  │  ├─ Loader
   │  │  │  │  ├─ AbstractLoader.php
   │  │  │  │  ├─ AnnotationLoader.php
   │  │  │  │  ├─ AttributeLoader.php
   │  │  │  │  ├─ AutoMappingTrait.php
   │  │  │  │  ├─ FileLoader.php
   │  │  │  │  ├─ FilesLoader.php
   │  │  │  │  ├─ LoaderChain.php
   │  │  │  │  ├─ LoaderInterface.php
   │  │  │  │  ├─ PropertyInfoLoader.php
   │  │  │  │  ├─ StaticMethodLoader.php
   │  │  │  │  ├─ XmlFileLoader.php
   │  │  │  │  ├─ XmlFilesLoader.php
   │  │  │  │  ├─ YamlFileLoader.php
   │  │  │  │  ├─ YamlFilesLoader.php
   │  │  │  │  └─ schema
   │  │  │  │     └─ dic
   │  │  │  │        └─ constraint-mapping
   │  │  │  │           └─ constraint-mapping-1.0.xsd
   │  │  │  ├─ MemberMetadata.php
   │  │  │  ├─ MetadataInterface.php
   │  │  │  ├─ PropertyMetadata.php
   │  │  │  ├─ PropertyMetadataInterface.php
   │  │  │  └─ TraversalStrategy.php
   │  │  ├─ ObjectInitializerInterface.php
   │  │  ├─ README.md
   │  │  ├─ Resources
   │  │  │  ├─ bin
   │  │  │  └─ translations
   │  │  │     ├─ validators.af.xlf
   │  │  │     ├─ validators.ar.xlf
   │  │  │     ├─ validators.az.xlf
   │  │  │     ├─ validators.be.xlf
   │  │  │     ├─ validators.bg.xlf
   │  │  │     ├─ validators.bs.xlf
   │  │  │     ├─ validators.ca.xlf
   │  │  │     ├─ validators.cs.xlf
   │  │  │     ├─ validators.cy.xlf
   │  │  │     ├─ validators.da.xlf
   │  │  │     ├─ validators.de.xlf
   │  │  │     ├─ validators.el.xlf
   │  │  │     ├─ validators.en.xlf
   │  │  │     ├─ validators.es.xlf
   │  │  │     ├─ validators.et.xlf
   │  │  │     ├─ validators.eu.xlf
   │  │  │     ├─ validators.fa.xlf
   │  │  │     ├─ validators.fi.xlf
   │  │  │     ├─ validators.fr.xlf
   │  │  │     ├─ validators.gl.xlf
   │  │  │     ├─ validators.he.xlf
   │  │  │     ├─ validators.hr.xlf
   │  │  │     ├─ validators.hu.xlf
   │  │  │     ├─ validators.hy.xlf
   │  │  │     ├─ validators.id.xlf
   │  │  │     ├─ validators.it.xlf
   │  │  │     ├─ validators.ja.xlf
   │  │  │     ├─ validators.lb.xlf
   │  │  │     ├─ validators.lt.xlf
   │  │  │     ├─ validators.lv.xlf
   │  │  │     ├─ validators.mk.xlf
   │  │  │     ├─ validators.mn.xlf
   │  │  │     ├─ validators.my.xlf
   │  │  │     ├─ validators.nb.xlf
   │  │  │     ├─ validators.nl.xlf
   │  │  │     ├─ validators.nn.xlf
   │  │  │     ├─ validators.no.xlf
   │  │  │     ├─ validators.pl.xlf
   │  │  │     ├─ validators.pt.xlf
   │  │  │     ├─ validators.pt_BR.xlf
   │  │  │     ├─ validators.ro.xlf
   │  │  │     ├─ validators.ru.xlf
   │  │  │     ├─ validators.sk.xlf
   │  │  │     ├─ validators.sl.xlf
   │  │  │     ├─ validators.sq.xlf
   │  │  │     ├─ validators.sr_Cyrl.xlf
   │  │  │     ├─ validators.sr_Latn.xlf
   │  │  │     ├─ validators.sv.xlf
   │  │  │     ├─ validators.th.xlf
   │  │  │     ├─ validators.tl.xlf
   │  │  │     ├─ validators.tr.xlf
   │  │  │     ├─ validators.uk.xlf
   │  │  │     ├─ validators.ur.xlf
   │  │  │     ├─ validators.uz.xlf
   │  │  │     ├─ validators.vi.xlf
   │  │  │     ├─ validators.zh_CN.xlf
   │  │  │     └─ validators.zh_TW.xlf
   │  │  ├─ Test
   │  │  │  └─ ConstraintValidatorTestCase.php
   │  │  ├─ Util
   │  │  │  └─ PropertyPath.php
   │  │  ├─ Validation.php
   │  │  ├─ Validator
   │  │  │  ├─ ContextualValidatorInterface.php
   │  │  │  ├─ LazyProperty.php
   │  │  │  ├─ RecursiveContextualValidator.php
   │  │  │  ├─ RecursiveValidator.php
   │  │  │  ├─ TraceableValidator.php
   │  │  │  └─ ValidatorInterface.php
   │  │  ├─ ValidatorBuilder.php
   │  │  ├─ Violation
   │  │  │  ├─ ConstraintViolationBuilder.php
   │  │  │  └─ ConstraintViolationBuilderInterface.php
   │  │  └─ composer.json
   │  ├─ var-exporter
   │  │  ├─ CHANGELOG.md
   │  │  ├─ Exception
   │  │  │  ├─ ClassNotFoundException.php
   │  │  │  ├─ ExceptionInterface.php
   │  │  │  ├─ LogicException.php
   │  │  │  └─ NotInstantiableTypeException.php
   │  │  ├─ Hydrator.php
   │  │  ├─ Instantiator.php
   │  │  ├─ Internal
   │  │  │  ├─ Exporter.php
   │  │  │  ├─ Hydrator.php
   │  │  │  ├─ LazyObjectRegistry.php
   │  │  │  ├─ LazyObjectState.php
   │  │  │  ├─ LazyObjectTrait.php
   │  │  │  ├─ Reference.php
   │  │  │  ├─ Registry.php
   │  │  │  └─ Values.php
   │  │  ├─ LICENSE
   │  │  ├─ LazyGhostTrait.php
   │  │  ├─ LazyObjectInterface.php
   │  │  ├─ LazyProxyTrait.php
   │  │  ├─ ProxyHelper.php
   │  │  ├─ README.md
   │  │  ├─ VarExporter.php
   │  │  └─ composer.json
   │  └─ yaml
   │     ├─ CHANGELOG.md
   │     ├─ Command
   │     │  └─ LintCommand.php
   │     ├─ Dumper.php
   │     ├─ Escaper.php
   │     ├─ Exception
   │     │  ├─ DumpException.php
   │     │  ├─ ExceptionInterface.php
   │     │  ├─ ParseException.php
   │     │  └─ RuntimeException.php
   │     ├─ Inline.php
   │     ├─ LICENSE
   │     ├─ Parser.php
   │     ├─ README.md
   │     ├─ Resources
   │     │  └─ bin
   │     │     └─ yaml-lint
   │     ├─ Tag
   │     │  └─ TaggedValue.php
   │     ├─ Unescaper.php
   │     ├─ Yaml.php
   │     └─ composer.json
   ├─ twbs
   │  └─ bootstrap
   │     ├─ .babelrc.js
   │     ├─ .browserslistrc
   │     ├─ .bundlewatch.config.json
   │     ├─ .cspell.json
   │     ├─ .editorconfig
   │     ├─ .eslintignore
   │     ├─ .eslintrc.json
   │     ├─ .gitattributes
   │     ├─ .github
   │     │  ├─ CODEOWNERS
   │     │  ├─ CONTRIBUTING.md
   │     │  ├─ ISSUE_TEMPLATE
   │     │  │  ├─ bug_report.yml
   │     │  │  ├─ config.yml
   │     │  │  └─ feature_request.yml
   │     │  ├─ PULL_REQUEST_TEMPLATE.md
   │     │  ├─ SUPPORT.md
   │     │  ├─ codeql
   │     │  │  └─ codeql-config.yml
   │     │  ├─ dependabot.yml
   │     │  ├─ release-drafter.yml
   │     │  └─ workflows
   │     │     ├─ browserstack.yml
   │     │     ├─ bundlewatch.yml
   │     │     ├─ calibreapp-image-actions.yml
   │     │     ├─ codeql.yml
   │     │     ├─ cspell.yml
   │     │     ├─ css.yml
   │     │     ├─ docs.yml
   │     │     ├─ issue-close-require.yml
   │     │     ├─ issue-labeled.yml
   │     │     ├─ js.yml
   │     │     ├─ lint.yml
   │     │     ├─ node-sass.yml
   │     │     └─ release-notes.yml
   │     ├─ .gitignore
   │     ├─ .npmrc
   │     ├─ .stylelintignore
   │     ├─ .stylelintrc.json
   │     ├─ CODE_OF_CONDUCT.md
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ SECURITY.md
   │     ├─ build
   │     │  ├─ banner.mjs
   │     │  ├─ build-plugins.mjs
   │     │  ├─ change-version.mjs
   │     │  ├─ generate-sri.mjs
   │     │  ├─ postcss.config.mjs
   │     │  ├─ rollup.config.mjs
   │     │  ├─ vnu-jar.mjs
   │     │  └─ zip-examples.mjs
   │     ├─ composer.json
   │     ├─ dist
   │     │  ├─ css
   │     │  │  ├─ bootstrap-grid.css
   │     │  │  ├─ bootstrap-grid.css.map
   │     │  │  ├─ bootstrap-grid.min.css
   │     │  │  ├─ bootstrap-grid.min.css.map
   │     │  │  ├─ bootstrap-grid.rtl.css
   │     │  │  ├─ bootstrap-grid.rtl.css.map
   │     │  │  ├─ bootstrap-grid.rtl.min.css
   │     │  │  ├─ bootstrap-grid.rtl.min.css.map
   │     │  │  ├─ bootstrap-reboot.css
   │     │  │  ├─ bootstrap-reboot.css.map
   │     │  │  ├─ bootstrap-reboot.min.css
   │     │  │  ├─ bootstrap-reboot.min.css.map
   │     │  │  ├─ bootstrap-reboot.rtl.css
   │     │  │  ├─ bootstrap-reboot.rtl.css.map
   │     │  │  ├─ bootstrap-reboot.rtl.min.css
   │     │  │  ├─ bootstrap-reboot.rtl.min.css.map
   │     │  │  ├─ bootstrap-utilities.css
   │     │  │  ├─ bootstrap-utilities.css.map
   │     │  │  ├─ bootstrap-utilities.min.css
   │     │  │  ├─ bootstrap-utilities.min.css.map
   │     │  │  ├─ bootstrap-utilities.rtl.css
   │     │  │  ├─ bootstrap-utilities.rtl.css.map
   │     │  │  ├─ bootstrap-utilities.rtl.min.css
   │     │  │  ├─ bootstrap-utilities.rtl.min.css.map
   │     │  │  ├─ bootstrap.css
   │     │  │  ├─ bootstrap.css.map
   │     │  │  ├─ bootstrap.min.css
   │     │  │  ├─ bootstrap.min.css.map
   │     │  │  ├─ bootstrap.rtl.css
   │     │  │  ├─ bootstrap.rtl.css.map
   │     │  │  ├─ bootstrap.rtl.min.css
   │     │  │  └─ bootstrap.rtl.min.css.map
   │     │  └─ js
   │     │     ├─ bootstrap.bundle.js
   │     │     ├─ bootstrap.bundle.js.map
   │     │     ├─ bootstrap.bundle.min.js
   │     │     ├─ bootstrap.bundle.min.js.map
   │     │     ├─ bootstrap.esm.js
   │     │     ├─ bootstrap.esm.js.map
   │     │     ├─ bootstrap.esm.min.js
   │     │     ├─ bootstrap.esm.min.js.map
   │     │     ├─ bootstrap.js
   │     │     ├─ bootstrap.js.map
   │     │     ├─ bootstrap.min.js
   │     │     └─ bootstrap.min.js.map
   │     ├─ hugo.yml
   │     ├─ js
   │     │  ├─ dist
   │     │  │  ├─ alert.js
   │     │  │  ├─ alert.js.map
   │     │  │  ├─ base-component.js
   │     │  │  ├─ base-component.js.map
   │     │  │  ├─ button.js
   │     │  │  ├─ button.js.map
   │     │  │  ├─ carousel.js
   │     │  │  ├─ carousel.js.map
   │     │  │  ├─ collapse.js
   │     │  │  ├─ collapse.js.map
   │     │  │  ├─ dom
   │     │  │  │  ├─ data.js
   │     │  │  │  ├─ data.js.map
   │     │  │  │  ├─ event-handler.js
   │     │  │  │  ├─ event-handler.js.map
   │     │  │  │  ├─ manipulator.js
   │     │  │  │  ├─ manipulator.js.map
   │     │  │  │  ├─ selector-engine.js
   │     │  │  │  └─ selector-engine.js.map
   │     │  │  ├─ dropdown.js
   │     │  │  ├─ dropdown.js.map
   │     │  │  ├─ modal.js
   │     │  │  ├─ modal.js.map
   │     │  │  ├─ offcanvas.js
   │     │  │  ├─ offcanvas.js.map
   │     │  │  ├─ popover.js
   │     │  │  ├─ popover.js.map
   │     │  │  ├─ scrollspy.js
   │     │  │  ├─ scrollspy.js.map
   │     │  │  ├─ tab.js
   │     │  │  ├─ tab.js.map
   │     │  │  ├─ toast.js
   │     │  │  ├─ toast.js.map
   │     │  │  ├─ tooltip.js
   │     │  │  ├─ tooltip.js.map
   │     │  │  └─ util
   │     │  │     ├─ backdrop.js
   │     │  │     ├─ backdrop.js.map
   │     │  │     ├─ component-functions.js
   │     │  │     ├─ component-functions.js.map
   │     │  │     ├─ config.js
   │     │  │     ├─ config.js.map
   │     │  │     ├─ focustrap.js
   │     │  │     ├─ focustrap.js.map
   │     │  │     ├─ index.js
   │     │  │     ├─ index.js.map
   │     │  │     ├─ sanitizer.js
   │     │  │     ├─ sanitizer.js.map
   │     │  │     ├─ scrollbar.js
   │     │  │     ├─ scrollbar.js.map
   │     │  │     ├─ swipe.js
   │     │  │     ├─ swipe.js.map
   │     │  │     ├─ template-factory.js
   │     │  │     └─ template-factory.js.map
   │     │  ├─ index.esm.js
   │     │  ├─ index.umd.js
   │     │  ├─ src
   │     │  │  ├─ alert.js
   │     │  │  ├─ base-component.js
   │     │  │  ├─ button.js
   │     │  │  ├─ carousel.js
   │     │  │  ├─ collapse.js
   │     │  │  ├─ dom
   │     │  │  │  ├─ data.js
   │     │  │  │  ├─ event-handler.js
   │     │  │  │  ├─ manipulator.js
   │     │  │  │  └─ selector-engine.js
   │     │  │  ├─ dropdown.js
   │     │  │  ├─ modal.js
   │     │  │  ├─ offcanvas.js
   │     │  │  ├─ popover.js
   │     │  │  ├─ scrollspy.js
   │     │  │  ├─ tab.js
   │     │  │  ├─ toast.js
   │     │  │  ├─ tooltip.js
   │     │  │  └─ util
   │     │  │     ├─ backdrop.js
   │     │  │     ├─ component-functions.js
   │     │  │     ├─ config.js
   │     │  │     ├─ focustrap.js
   │     │  │     ├─ index.js
   │     │  │     ├─ sanitizer.js
   │     │  │     ├─ scrollbar.js
   │     │  │     ├─ swipe.js
   │     │  │     └─ template-factory.js
   │     │  └─ tests
   │     │     ├─ README.md
   │     │     ├─ browsers.js
   │     │     ├─ helpers
   │     │     │  └─ fixture.js
   │     │     ├─ integration
   │     │     │  ├─ bundle-modularity.js
   │     │     │  ├─ bundle.js
   │     │     │  ├─ index.html
   │     │     │  ├─ rollup.bundle-modularity.js
   │     │     │  └─ rollup.bundle.js
   │     │     ├─ karma.conf.js
   │     │     ├─ unit
   │     │     │  ├─ alert.spec.js
   │     │     │  ├─ base-component.spec.js
   │     │     │  ├─ button.spec.js
   │     │     │  ├─ carousel.spec.js
   │     │     │  ├─ collapse.spec.js
   │     │     │  ├─ dom
   │     │     │  │  ├─ data.spec.js
   │     │     │  │  ├─ event-handler.spec.js
   │     │     │  │  ├─ manipulator.spec.js
   │     │     │  │  └─ selector-engine.spec.js
   │     │     │  ├─ dropdown.spec.js
   │     │     │  ├─ jquery.spec.js
   │     │     │  ├─ modal.spec.js
   │     │     │  ├─ offcanvas.spec.js
   │     │     │  ├─ popover.spec.js
   │     │     │  ├─ scrollspy.spec.js
   │     │     │  ├─ tab.spec.js
   │     │     │  ├─ toast.spec.js
   │     │     │  ├─ tooltip.spec.js
   │     │     │  └─ util
   │     │     │     ├─ backdrop.spec.js
   │     │     │     ├─ component-functions.spec.js
   │     │     │     ├─ config.spec.js
   │     │     │     ├─ focustrap.spec.js
   │     │     │     ├─ index.spec.js
   │     │     │     ├─ sanitizer.spec.js
   │     │     │     ├─ scrollbar.spec.js
   │     │     │     ├─ swipe.spec.js
   │     │     │     └─ template-factory.spec.js
   │     │     └─ visual
   │     │        ├─ alert.html
   │     │        ├─ button.html
   │     │        ├─ carousel.html
   │     │        ├─ collapse.html
   │     │        ├─ dropdown.html
   │     │        ├─ input.html
   │     │        ├─ modal.html
   │     │        ├─ popover.html
   │     │        ├─ scrollspy.html
   │     │        ├─ tab.html
   │     │        ├─ toast.html
   │     │        └─ tooltip.html
   │     ├─ nuget
   │     │  ├─ MyGet.ps1
   │     │  ├─ bootstrap.nuspec
   │     │  ├─ bootstrap.png
   │     │  └─ bootstrap.sass.nuspec
   │     ├─ package-lock.json
   │     ├─ package.js
   │     ├─ package.json
   │     ├─ scss
   │     │  ├─ _accordion.scss
   │     │  ├─ _alert.scss
   │     │  ├─ _badge.scss
   │     │  ├─ _breadcrumb.scss
   │     │  ├─ _button-group.scss
   │     │  ├─ _buttons.scss
   │     │  ├─ _card.scss
   │     │  ├─ _carousel.scss
   │     │  ├─ _close.scss
   │     │  ├─ _containers.scss
   │     │  ├─ _dropdown.scss
   │     │  ├─ _forms.scss
   │     │  ├─ _functions.scss
   │     │  ├─ _grid.scss
   │     │  ├─ _helpers.scss
   │     │  ├─ _images.scss
   │     │  ├─ _list-group.scss
   │     │  ├─ _maps.scss
   │     │  ├─ _mixins.scss
   │     │  ├─ _modal.scss
   │     │  ├─ _nav.scss
   │     │  ├─ _navbar.scss
   │     │  ├─ _offcanvas.scss
   │     │  ├─ _pagination.scss
   │     │  ├─ _placeholders.scss
   │     │  ├─ _popover.scss
   │     │  ├─ _progress.scss
   │     │  ├─ _reboot.scss
   │     │  ├─ _root.scss
   │     │  ├─ _spinners.scss
   │     │  ├─ _tables.scss
   │     │  ├─ _toasts.scss
   │     │  ├─ _tooltip.scss
   │     │  ├─ _transitions.scss
   │     │  ├─ _type.scss
   │     │  ├─ _utilities.scss
   │     │  ├─ _variables-dark.scss
   │     │  ├─ _variables.scss
   │     │  ├─ bootstrap-grid.scss
   │     │  ├─ bootstrap-reboot.scss
   │     │  ├─ bootstrap-utilities.scss
   │     │  ├─ bootstrap.scss
   │     │  ├─ forms
   │     │  │  ├─ _floating-labels.scss
   │     │  │  ├─ _form-check.scss
   │     │  │  ├─ _form-control.scss
   │     │  │  ├─ _form-range.scss
   │     │  │  ├─ _form-select.scss
   │     │  │  ├─ _form-text.scss
   │     │  │  ├─ _input-group.scss
   │     │  │  ├─ _labels.scss
   │     │  │  └─ _validation.scss
   │     │  ├─ helpers
   │     │  │  ├─ _clearfix.scss
   │     │  │  ├─ _color-bg.scss
   │     │  │  ├─ _colored-links.scss
   │     │  │  ├─ _focus-ring.scss
   │     │  │  ├─ _icon-link.scss
   │     │  │  ├─ _position.scss
   │     │  │  ├─ _ratio.scss
   │     │  │  ├─ _stacks.scss
   │     │  │  ├─ _stretched-link.scss
   │     │  │  ├─ _text-truncation.scss
   │     │  │  ├─ _visually-hidden.scss
   │     │  │  └─ _vr.scss
   │     │  ├─ mixins
   │     │  │  ├─ _alert.scss
   │     │  │  ├─ _backdrop.scss
   │     │  │  ├─ _banner.scss
   │     │  │  ├─ _border-radius.scss
   │     │  │  ├─ _box-shadow.scss
   │     │  │  ├─ _breakpoints.scss
   │     │  │  ├─ _buttons.scss
   │     │  │  ├─ _caret.scss
   │     │  │  ├─ _clearfix.scss
   │     │  │  ├─ _color-mode.scss
   │     │  │  ├─ _color-scheme.scss
   │     │  │  ├─ _container.scss
   │     │  │  ├─ _deprecate.scss
   │     │  │  ├─ _forms.scss
   │     │  │  ├─ _gradients.scss
   │     │  │  ├─ _grid.scss
   │     │  │  ├─ _image.scss
   │     │  │  ├─ _list-group.scss
   │     │  │  ├─ _lists.scss
   │     │  │  ├─ _pagination.scss
   │     │  │  ├─ _reset-text.scss
   │     │  │  ├─ _resize.scss
   │     │  │  ├─ _table-variants.scss
   │     │  │  ├─ _text-truncate.scss
   │     │  │  ├─ _transition.scss
   │     │  │  ├─ _utilities.scss
   │     │  │  └─ _visually-hidden.scss
   │     │  ├─ tests
   │     │  │  ├─ jasmine.js
   │     │  │  ├─ mixins
   │     │  │  │  ├─ _auto-import-of-variables-dark.test.scss
   │     │  │  │  ├─ _color-modes.test.scss
   │     │  │  │  ├─ _media-query-color-mode-full.test.scss
   │     │  │  │  └─ _utilities.test.scss
   │     │  │  ├─ sass-true
   │     │  │  │  ├─ register.js
   │     │  │  │  └─ runner.js
   │     │  │  └─ utilities
   │     │  │     └─ _api.test.scss
   │     │  ├─ utilities
   │     │  │  └─ _api.scss
   │     │  └─ vendor
   │     │     └─ _rfs.scss
   │     └─ site
   │        ├─ assets
   │        │  ├─ js
   │        │  │  ├─ application.js
   │        │  │  ├─ code-examples.js
   │        │  │  ├─ search.js
   │        │  │  ├─ snippets.js
   │        │  │  └─ vendor
   │        │  │     └─ clipboard.min.js
   │        │  └─ scss
   │        │     ├─ _ads.scss
   │        │     ├─ _anchor.scss
   │        │     ├─ _brand.scss
   │        │     ├─ _buttons.scss
   │        │     ├─ _callouts.scss
   │        │     ├─ _clipboard-js.scss
   │        │     ├─ _colors.scss
   │        │     ├─ _component-examples.scss
   │        │     ├─ _content.scss
   │        │     ├─ _footer.scss
   │        │     ├─ _layout.scss
   │        │     ├─ _masthead.scss
   │        │     ├─ _navbar.scss
   │        │     ├─ _placeholder-img.scss
   │        │     ├─ _scrolling.scss
   │        │     ├─ _search.scss
   │        │     ├─ _sidebar.scss
   │        │     ├─ _skippy.scss
   │        │     ├─ _syntax.scss
   │        │     ├─ _toc.scss
   │        │     ├─ _variables.scss
   │        │     └─ docs.scss
   │        ├─ content
   │        │  ├─ 404.md
   │        │  └─ docs
   │        │     ├─ 5.3
   │        │     │  ├─ _index.html
   │        │     │  ├─ about
   │        │     │  │  ├─ brand.md
   │        │     │  │  ├─ license.md
   │        │     │  │  ├─ overview.md
   │        │     │  │  ├─ team.md
   │        │     │  │  └─ translations.md
   │        │     │  ├─ components
   │        │     │  │  ├─ accordion.md
   │        │     │  │  ├─ alerts.md
   │        │     │  │  ├─ badge.md
   │        │     │  │  ├─ breadcrumb.md
   │        │     │  │  ├─ button-group.md
   │        │     │  │  ├─ buttons.md
   │        │     │  │  ├─ card.md
   │        │     │  │  ├─ carousel.md
   │        │     │  │  ├─ close-button.md
   │        │     │  │  ├─ collapse.md
   │        │     │  │  ├─ dropdowns.md
   │        │     │  │  ├─ list-group.md
   │        │     │  │  ├─ modal.md
   │        │     │  │  ├─ navbar.md
   │        │     │  │  ├─ navs-tabs.md
   │        │     │  │  ├─ offcanvas.md
   │        │     │  │  ├─ pagination.md
   │        │     │  │  ├─ placeholders.md
   │        │     │  │  ├─ popovers.md
   │        │     │  │  ├─ progress.md
   │        │     │  │  ├─ scrollspy.md
   │        │     │  │  ├─ spinners.md
   │        │     │  │  ├─ toasts.md
   │        │     │  │  └─ tooltips.md
   │        │     │  ├─ content
   │        │     │  │  ├─ figures.md
   │        │     │  │  ├─ images.md
   │        │     │  │  ├─ reboot.md
   │        │     │  │  ├─ tables.md
   │        │     │  │  └─ typography.md
   │        │     │  ├─ customize
   │        │     │  │  ├─ color-modes.md
   │        │     │  │  ├─ color.md
   │        │     │  │  ├─ components.md
   │        │     │  │  ├─ css-variables.md
   │        │     │  │  ├─ optimize.md
   │        │     │  │  ├─ options.md
   │        │     │  │  ├─ overview.md
   │        │     │  │  └─ sass.md
   │        │     │  ├─ docsref.md
   │        │     │  ├─ examples
   │        │     │  │  ├─ _index.md
   │        │     │  │  ├─ album
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ album-rtl
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ badges
   │        │     │  │  │  ├─ badges.css
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ blog
   │        │     │  │  │  ├─ blog.css
   │        │     │  │  │  ├─ blog.rtl.css
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ blog-rtl
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ breadcrumbs
   │        │     │  │  │  ├─ breadcrumbs.css
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ buttons
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ carousel
   │        │     │  │  │  ├─ carousel.css
   │        │     │  │  │  ├─ carousel.rtl.css
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ carousel-rtl
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ cheatsheet
   │        │     │  │  │  ├─ cheatsheet.css
   │        │     │  │  │  ├─ cheatsheet.js
   │        │     │  │  │  ├─ cheatsheet.rtl.css
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ cheatsheet-rtl
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ checkout
   │        │     │  │  │  ├─ checkout.css
   │        │     │  │  │  ├─ checkout.js
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ checkout-rtl
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ cover
   │        │     │  │  │  ├─ cover.css
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ dashboard
   │        │     │  │  │  ├─ dashboard.css
   │        │     │  │  │  ├─ dashboard.js
   │        │     │  │  │  ├─ dashboard.rtl.css
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ dashboard-rtl
   │        │     │  │  │  ├─ dashboard.js
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ dropdowns
   │        │     │  │  │  ├─ dropdowns.css
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ features
   │        │     │  │  │  ├─ features.css
   │        │     │  │  │  ├─ index.html
   │        │     │  │  │  ├─ unsplash-photo-1.jpg
   │        │     │  │  │  ├─ unsplash-photo-2.jpg
   │        │     │  │  │  └─ unsplash-photo-3.jpg
   │        │     │  │  ├─ footers
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ grid
   │        │     │  │  │  ├─ grid.css
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ headers
   │        │     │  │  │  ├─ headers.css
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ heroes
   │        │     │  │  │  ├─ bootstrap-docs.png
   │        │     │  │  │  ├─ bootstrap-themes.png
   │        │     │  │  │  ├─ heroes.css
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ jumbotron
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ jumbotrons
   │        │     │  │  │  ├─ index.html
   │        │     │  │  │  └─ jumbotrons.css
   │        │     │  │  ├─ list-groups
   │        │     │  │  │  ├─ index.html
   │        │     │  │  │  └─ list-groups.css
   │        │     │  │  ├─ masonry
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ modals
   │        │     │  │  │  ├─ index.html
   │        │     │  │  │  └─ modals.css
   │        │     │  │  ├─ navbar-bottom
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ navbar-fixed
   │        │     │  │  │  ├─ index.html
   │        │     │  │  │  └─ navbar-fixed.css
   │        │     │  │  ├─ navbar-static
   │        │     │  │  │  ├─ index.html
   │        │     │  │  │  └─ navbar-static.css
   │        │     │  │  ├─ navbars
   │        │     │  │  │  ├─ index.html
   │        │     │  │  │  └─ navbars.css
   │        │     │  │  ├─ navbars-offcanvas
   │        │     │  │  │  ├─ index.html
   │        │     │  │  │  └─ navbars-offcanvas.css
   │        │     │  │  ├─ offcanvas-navbar
   │        │     │  │  │  ├─ index.html
   │        │     │  │  │  ├─ offcanvas-navbar.css
   │        │     │  │  │  └─ offcanvas-navbar.js
   │        │     │  │  ├─ pricing
   │        │     │  │  │  ├─ index.html
   │        │     │  │  │  └─ pricing.css
   │        │     │  │  ├─ product
   │        │     │  │  │  ├─ index.html
   │        │     │  │  │  └─ product.css
   │        │     │  │  ├─ sidebars
   │        │     │  │  │  ├─ index.html
   │        │     │  │  │  ├─ sidebars.css
   │        │     │  │  │  └─ sidebars.js
   │        │     │  │  ├─ sign-in
   │        │     │  │  │  ├─ index.html
   │        │     │  │  │  └─ sign-in.css
   │        │     │  │  ├─ starter-template
   │        │     │  │  │  └─ index.html
   │        │     │  │  ├─ sticky-footer
   │        │     │  │  │  ├─ index.html
   │        │     │  │  │  └─ sticky-footer.css
   │        │     │  │  └─ sticky-footer-navbar
   │        │     │  │     ├─ index.html
   │        │     │  │     └─ sticky-footer-navbar.css
   │        │     │  ├─ extend
   │        │     │  │  ├─ approach.md
   │        │     │  │  └─ icons.md
   │        │     │  ├─ forms
   │        │     │  │  ├─ checks-radios.md
   │        │     │  │  ├─ floating-labels.md
   │        │     │  │  ├─ form-control.md
   │        │     │  │  ├─ input-group.md
   │        │     │  │  ├─ layout.md
   │        │     │  │  ├─ overview.md
   │        │     │  │  ├─ range.md
   │        │     │  │  ├─ select.md
   │        │     │  │  └─ validation.md
   │        │     │  ├─ getting-started
   │        │     │  │  ├─ accessibility.md
   │        │     │  │  ├─ best-practices.md
   │        │     │  │  ├─ browsers-devices.md
   │        │     │  │  ├─ contents.md
   │        │     │  │  ├─ contribute.md
   │        │     │  │  ├─ download.md
   │        │     │  │  ├─ introduction.md
   │        │     │  │  ├─ javascript.md
   │        │     │  │  ├─ parcel.md
   │        │     │  │  ├─ rfs.md
   │        │     │  │  ├─ rtl.md
   │        │     │  │  ├─ vite.md
   │        │     │  │  └─ webpack.md
   │        │     │  ├─ helpers
   │        │     │  │  ├─ clearfix.md
   │        │     │  │  ├─ color-background.md
   │        │     │  │  ├─ colored-links.md
   │        │     │  │  ├─ focus-ring.md
   │        │     │  │  ├─ icon-link.md
   │        │     │  │  ├─ position.md
   │        │     │  │  ├─ ratio.md
   │        │     │  │  ├─ stacks.md
   │        │     │  │  ├─ stretched-link.md
   │        │     │  │  ├─ text-truncation.md
   │        │     │  │  ├─ vertical-rule.md
   │        │     │  │  └─ visually-hidden.md
   │        │     │  ├─ layout
   │        │     │  │  ├─ breakpoints.md
   │        │     │  │  ├─ columns.md
   │        │     │  │  ├─ containers.md
   │        │     │  │  ├─ css-grid.md
   │        │     │  │  ├─ grid.md
   │        │     │  │  ├─ gutters.md
   │        │     │  │  ├─ utilities.md
   │        │     │  │  └─ z-index.md
   │        │     │  ├─ migration.md
   │        │     │  └─ utilities
   │        │     │     ├─ api.md
   │        │     │     ├─ background.md
   │        │     │     ├─ borders.md
   │        │     │     ├─ colors.md
   │        │     │     ├─ display.md
   │        │     │     ├─ flex.md
   │        │     │     ├─ float.md
   │        │     │     ├─ interactions.md
   │        │     │     ├─ link.md
   │        │     │     ├─ object-fit.md
   │        │     │     ├─ opacity.md
   │        │     │     ├─ overflow.md
   │        │     │     ├─ position.md
   │        │     │     ├─ shadows.md
   │        │     │     ├─ sizing.md
   │        │     │     ├─ spacing.md
   │        │     │     ├─ text.md
   │        │     │     ├─ vertical-align.md
   │        │     │     ├─ visibility.md
   │        │     │     └─ z-index.md
   │        │     ├─ _index.html
   │        │     └─ versions.md
   │        ├─ data
   │        │  ├─ breakpoints.yml
   │        │  ├─ colors.yml
   │        │  ├─ core-team.yml
   │        │  ├─ docs-versions.yml
   │        │  ├─ examples.yml
   │        │  ├─ grays.yml
   │        │  ├─ icons.yml
   │        │  ├─ plugins.yml
   │        │  ├─ sidebar.yml
   │        │  ├─ theme-colors.yml
   │        │  └─ translations.yml
   │        ├─ layouts
   │        │  ├─ _default
   │        │  │  ├─ 404.html
   │        │  │  ├─ _markup
   │        │  │  │  └─ render-heading.html
   │        │  │  ├─ baseof.html
   │        │  │  ├─ docs.html
   │        │  │  ├─ examples.html
   │        │  │  ├─ home.html
   │        │  │  ├─ redirect.html
   │        │  │  └─ single.html
   │        │  ├─ alias.html
   │        │  ├─ partials
   │        │  │  ├─ ads.html
   │        │  │  ├─ analytics.html
   │        │  │  ├─ callouts
   │        │  │  │  ├─ danger-async-methods.md
   │        │  │  │  ├─ info-mediaqueries-breakpoints.md
   │        │  │  │  ├─ info-npm-starter.md
   │        │  │  │  ├─ info-prefersreducedmotion.md
   │        │  │  │  ├─ info-sanitizer.md
   │        │  │  │  ├─ warning-color-assistive-technologies.md
   │        │  │  │  ├─ warning-data-bs-title-vs-title.md
   │        │  │  │  └─ warning-input-support.md
   │        │  │  ├─ docs-navbar.html
   │        │  │  ├─ docs-sidebar.html
   │        │  │  ├─ docs-versions.html
   │        │  │  ├─ favicons.html
   │        │  │  ├─ footer.html
   │        │  │  ├─ guide-footer.md
   │        │  │  ├─ header.html
   │        │  │  ├─ home
   │        │  │  │  ├─ components-utilities.html
   │        │  │  │  ├─ css-variables.html
   │        │  │  │  ├─ customize.html
   │        │  │  │  ├─ get-started.html
   │        │  │  │  ├─ icons.html
   │        │  │  │  ├─ masthead.html
   │        │  │  │  ├─ plugins.html
   │        │  │  │  └─ themes.html
   │        │  │  ├─ icons
   │        │  │  │  ├─ bootstrap-white-fill.svg
   │        │  │  │  ├─ circle-square.svg
   │        │  │  │  ├─ droplet-fill.svg
   │        │  │  │  ├─ github.svg
   │        │  │  │  ├─ hamburger.svg
   │        │  │  │  ├─ opencollective.svg
   │        │  │  │  └─ twitter.svg
   │        │  │  ├─ icons.html
   │        │  │  ├─ js-data-attributes.md
   │        │  │  ├─ redirect.html
   │        │  │  ├─ scripts.html
   │        │  │  ├─ skippy.html
   │        │  │  ├─ social.html
   │        │  │  ├─ stylesheet.html
   │        │  │  └─ table-content.html
   │        │  ├─ robots.txt
   │        │  ├─ shortcodes
   │        │  │  ├─ added-in.html
   │        │  │  ├─ bs-table.html
   │        │  │  ├─ callout-deprecated-dark-variants.html
   │        │  │  ├─ callout.html
   │        │  │  ├─ deprecated-in.html
   │        │  │  ├─ docsref.html
   │        │  │  ├─ example.html
   │        │  │  ├─ js-dismiss.html
   │        │  │  ├─ js-docs.html
   │        │  │  ├─ markdown.html
   │        │  │  ├─ param.html
   │        │  │  ├─ partial.html
   │        │  │  ├─ placeholder.html
   │        │  │  ├─ scss-docs.html
   │        │  │  ├─ table.html
   │        │  │  └─ year.html
   │        │  └─ sitemap.xml
   │        └─ static
   │           ├─ CNAME
   │           ├─ docs
   │           │  └─ 5.3
   │           │     └─ assets
   │           │        ├─ brand
   │           │        │  ├─ bootstrap-logo-black.svg
   │           │        │  ├─ bootstrap-logo-shadow.png
   │           │        │  ├─ bootstrap-logo-white.svg
   │           │        │  ├─ bootstrap-logo.svg
   │           │        │  └─ bootstrap-social.png
   │           │        ├─ img
   │           │        │  ├─ bootstrap-icons.png
   │           │        │  ├─ bootstrap-icons@2x.png
   │           │        │  ├─ bootstrap-themes-collage.png
   │           │        │  ├─ bootstrap-themes-collage@2x.png
   │           │        │  ├─ bootstrap-themes.png
   │           │        │  ├─ bootstrap-themes@2x.png
   │           │        │  ├─ examples
   │           │        │  │  ├─ album-rtl.png
   │           │        │  │  ├─ album-rtl@2x.png
   │           │        │  │  ├─ album.png
   │           │        │  │  ├─ album@2x.png
   │           │        │  │  ├─ badges.png
   │           │        │  │  ├─ badges@2x.png
   │           │        │  │  ├─ blog-rtl.png
   │           │        │  │  ├─ blog-rtl@2x.png
   │           │        │  │  ├─ blog.png
   │           │        │  │  ├─ blog@2x.png
   │           │        │  │  ├─ breadcrumbs.png
   │           │        │  │  ├─ breadcrumbs@2x.png
   │           │        │  │  ├─ buttons.png
   │           │        │  │  ├─ buttons@2x.png
   │           │        │  │  ├─ carousel-rtl.png
   │           │        │  │  ├─ carousel-rtl@2x.png
   │           │        │  │  ├─ carousel.png
   │           │        │  │  ├─ carousel@2x.png
   │           │        │  │  ├─ cheatsheet-rtl.png
   │           │        │  │  ├─ cheatsheet-rtl@2x.png
   │           │        │  │  ├─ cheatsheet.png
   │           │        │  │  ├─ cheatsheet@2x.png
   │           │        │  │  ├─ checkout-rtl.png
   │           │        │  │  ├─ checkout-rtl@2x.png
   │           │        │  │  ├─ checkout.png
   │           │        │  │  ├─ checkout@2x.png
   │           │        │  │  ├─ cover.png
   │           │        │  │  ├─ cover@2x.png
   │           │        │  │  ├─ dashboard-rtl.png
   │           │        │  │  ├─ dashboard-rtl@2x.png
   │           │        │  │  ├─ dashboard.png
   │           │        │  │  ├─ dashboard@2x.png
   │           │        │  │  ├─ dropdowns.png
   │           │        │  │  ├─ dropdowns@2x.png
   │           │        │  │  ├─ features.png
   │           │        │  │  ├─ features@2x.png
   │           │        │  │  ├─ footers.png
   │           │        │  │  ├─ footers@2x.png
   │           │        │  │  ├─ grid.png
   │           │        │  │  ├─ grid@2x.png
   │           │        │  │  ├─ headers.png
   │           │        │  │  ├─ headers@2x.png
   │           │        │  │  ├─ heroes.png
   │           │        │  │  ├─ heroes@2x.png
   │           │        │  │  ├─ jumbotron.png
   │           │        │  │  ├─ jumbotron@2x.png
   │           │        │  │  ├─ jumbotrons.png
   │           │        │  │  ├─ jumbotrons@2x.png
   │           │        │  │  ├─ list-groups.png
   │           │        │  │  ├─ list-groups@2x.png
   │           │        │  │  ├─ masonry.png
   │           │        │  │  ├─ masonry@2x.png
   │           │        │  │  ├─ modals.png
   │           │        │  │  ├─ modals@2x.png
   │           │        │  │  ├─ navbar-bottom.png
   │           │        │  │  ├─ navbar-bottom@2x.png
   │           │        │  │  ├─ navbar-fixed.png
   │           │        │  │  ├─ navbar-fixed@2x.png
   │           │        │  │  ├─ navbar-static.png
   │           │        │  │  ├─ navbar-static@2x.png
   │           │        │  │  ├─ navbars-offcanvas.png
   │           │        │  │  ├─ navbars-offcanvas@2x.png
   │           │        │  │  ├─ navbars.png
   │           │        │  │  ├─ navbars@2x.png
   │           │        │  │  ├─ offcanvas-navbar.png
   │           │        │  │  ├─ offcanvas-navbar@2x.png
   │           │        │  │  ├─ pricing.png
   │           │        │  │  ├─ pricing@2x.png
   │           │        │  │  ├─ product.png
   │           │        │  │  ├─ product@2x.png
   │           │        │  │  ├─ sidebars.png
   │           │        │  │  ├─ sidebars@2x.png
   │           │        │  │  ├─ sign-in.png
   │           │        │  │  ├─ sign-in@2x.png
   │           │        │  │  ├─ starter-template.png
   │           │        │  │  ├─ starter-template@2x.png
   │           │        │  │  ├─ sticky-footer-navbar.png
   │           │        │  │  ├─ sticky-footer-navbar@2x.png
   │           │        │  │  ├─ sticky-footer.png
   │           │        │  │  └─ sticky-footer@2x.png
   │           │        │  ├─ favicons
   │           │        │  │  ├─ android-chrome-192x192.png
   │           │        │  │  ├─ android-chrome-512x512.png
   │           │        │  │  ├─ apple-touch-icon.png
   │           │        │  │  ├─ favicon-16x16.png
   │           │        │  │  ├─ favicon-32x32.png
   │           │        │  │  ├─ favicon.ico
   │           │        │  │  ├─ manifest.json
   │           │        │  │  └─ safari-pinned-tab.svg
   │           │        │  ├─ guides
   │           │        │  │  ├─ bootstrap-parcel.png
   │           │        │  │  ├─ bootstrap-parcel@2x.png
   │           │        │  │  ├─ bootstrap-vite.png
   │           │        │  │  ├─ bootstrap-vite@2x.png
   │           │        │  │  ├─ bootstrap-webpack.png
   │           │        │  │  ├─ bootstrap-webpack@2x.png
   │           │        │  │  ├─ parcel-dev-server-bootstrap.png
   │           │        │  │  ├─ parcel-dev-server.png
   │           │        │  │  ├─ vite-dev-server-bootstrap.png
   │           │        │  │  ├─ vite-dev-server.png
   │           │        │  │  ├─ webpack-dev-server-bootstrap.png
   │           │        │  │  └─ webpack-dev-server.png
   │           │        │  ├─ parcel.png
   │           │        │  ├─ vite.svg
   │           │        │  └─ webpack.svg
   │           │        └─ js
   │           │           ├─ color-modes.js
   │           │           └─ validate-forms.js
   │           └─ sw.js
   └─ twig
      └─ twig
         ├─ CHANGELOG
         ├─ LICENSE
         ├─ README.rst
         ├─ composer.json
         └─ src
            ├─ Cache
            │  ├─ CacheInterface.php
            │  ├─ FilesystemCache.php
            │  └─ NullCache.php
            ├─ Compiler.php
            ├─ Environment.php
            ├─ Error
            │  ├─ Error.php
            │  ├─ LoaderError.php
            │  ├─ RuntimeError.php
            │  └─ SyntaxError.php
            ├─ ExpressionParser.php
            ├─ Extension
            │  ├─ AbstractExtension.php
            │  ├─ CoreExtension.php
            │  ├─ DebugExtension.php
            │  ├─ EscaperExtension.php
            │  ├─ ExtensionInterface.php
            │  ├─ GlobalsInterface.php
            │  ├─ OptimizerExtension.php
            │  ├─ ProfilerExtension.php
            │  ├─ RuntimeExtensionInterface.php
            │  ├─ SandboxExtension.php
            │  ├─ StagingExtension.php
            │  └─ StringLoaderExtension.php
            ├─ ExtensionSet.php
            ├─ FileExtensionEscapingStrategy.php
            ├─ Lexer.php
            ├─ Loader
            │  ├─ ArrayLoader.php
            │  ├─ ChainLoader.php
            │  ├─ FilesystemLoader.php
            │  └─ LoaderInterface.php
            ├─ Markup.php
            ├─ Node
            │  ├─ AutoEscapeNode.php
            │  ├─ BlockNode.php
            │  ├─ BlockReferenceNode.php
            │  ├─ BodyNode.php
            │  ├─ CheckSecurityCallNode.php
            │  ├─ CheckSecurityNode.php
            │  ├─ CheckToStringNode.php
            │  ├─ DeprecatedNode.php
            │  ├─ DoNode.php
            │  ├─ EmbedNode.php
            │  ├─ Expression
            │  │  ├─ AbstractExpression.php
            │  │  ├─ ArrayExpression.php
            │  │  ├─ ArrowFunctionExpression.php
            │  │  ├─ AssignNameExpression.php
            │  │  ├─ Binary
            │  │  │  ├─ AbstractBinary.php
            │  │  │  ├─ AddBinary.php
            │  │  │  ├─ AndBinary.php
            │  │  │  ├─ BitwiseAndBinary.php
            │  │  │  ├─ BitwiseOrBinary.php
            │  │  │  ├─ BitwiseXorBinary.php
            │  │  │  ├─ ConcatBinary.php
            │  │  │  ├─ DivBinary.php
            │  │  │  ├─ EndsWithBinary.php
            │  │  │  ├─ EqualBinary.php
            │  │  │  ├─ FloorDivBinary.php
            │  │  │  ├─ GreaterBinary.php
            │  │  │  ├─ GreaterEqualBinary.php
            │  │  │  ├─ HasEveryBinary.php
            │  │  │  ├─ HasSomeBinary.php
            │  │  │  ├─ InBinary.php
            │  │  │  ├─ LessBinary.php
            │  │  │  ├─ LessEqualBinary.php
            │  │  │  ├─ MatchesBinary.php
            │  │  │  ├─ ModBinary.php
            │  │  │  ├─ MulBinary.php
            │  │  │  ├─ NotEqualBinary.php
            │  │  │  ├─ NotInBinary.php
            │  │  │  ├─ OrBinary.php
            │  │  │  ├─ PowerBinary.php
            │  │  │  ├─ RangeBinary.php
            │  │  │  ├─ SpaceshipBinary.php
            │  │  │  ├─ StartsWithBinary.php
            │  │  │  └─ SubBinary.php
            │  │  ├─ BlockReferenceExpression.php
            │  │  ├─ CallExpression.php
            │  │  ├─ ConditionalExpression.php
            │  │  ├─ ConstantExpression.php
            │  │  ├─ Filter
            │  │  │  └─ DefaultFilter.php
            │  │  ├─ FilterExpression.php
            │  │  ├─ FunctionExpression.php
            │  │  ├─ GetAttrExpression.php
            │  │  ├─ InlinePrint.php
            │  │  ├─ MethodCallExpression.php
            │  │  ├─ NameExpression.php
            │  │  ├─ NullCoalesceExpression.php
            │  │  ├─ ParentExpression.php
            │  │  ├─ TempNameExpression.php
            │  │  ├─ Test
            │  │  │  ├─ ConstantTest.php
            │  │  │  ├─ DefinedTest.php
            │  │  │  ├─ DivisiblebyTest.php
            │  │  │  ├─ EvenTest.php
            │  │  │  ├─ NullTest.php
            │  │  │  ├─ OddTest.php
            │  │  │  └─ SameasTest.php
            │  │  ├─ TestExpression.php
            │  │  ├─ Unary
            │  │  │  ├─ AbstractUnary.php
            │  │  │  ├─ NegUnary.php
            │  │  │  ├─ NotUnary.php
            │  │  │  └─ PosUnary.php
            │  │  └─ VariadicExpression.php
            │  ├─ FlushNode.php
            │  ├─ ForLoopNode.php
            │  ├─ ForNode.php
            │  ├─ IfNode.php
            │  ├─ ImportNode.php
            │  ├─ IncludeNode.php
            │  ├─ MacroNode.php
            │  ├─ ModuleNode.php
            │  ├─ Node.php
            │  ├─ NodeCaptureInterface.php
            │  ├─ NodeOutputInterface.php
            │  ├─ PrintNode.php
            │  ├─ SandboxNode.php
            │  ├─ SetNode.php
            │  ├─ TextNode.php
            │  └─ WithNode.php
            ├─ NodeTraverser.php
            ├─ NodeVisitor
            │  ├─ AbstractNodeVisitor.php
            │  ├─ EscaperNodeVisitor.php
            │  ├─ MacroAutoImportNodeVisitor.php
            │  ├─ NodeVisitorInterface.php
            │  ├─ OptimizerNodeVisitor.php
            │  ├─ SafeAnalysisNodeVisitor.php
            │  └─ SandboxNodeVisitor.php
            ├─ Parser.php
            ├─ Profiler
            │  ├─ Dumper
            │  │  ├─ BaseDumper.php
            │  │  ├─ BlackfireDumper.php
            │  │  ├─ HtmlDumper.php
            │  │  └─ TextDumper.php
            │  ├─ Node
            │  │  ├─ EnterProfileNode.php
            │  │  └─ LeaveProfileNode.php
            │  ├─ NodeVisitor
            │  │  └─ ProfilerNodeVisitor.php
            │  └─ Profile.php
            ├─ RuntimeLoader
            │  ├─ ContainerRuntimeLoader.php
            │  ├─ FactoryRuntimeLoader.php
            │  └─ RuntimeLoaderInterface.php
            ├─ Sandbox
            │  ├─ SecurityError.php
            │  ├─ SecurityNotAllowedFilterError.php
            │  ├─ SecurityNotAllowedFunctionError.php
            │  ├─ SecurityNotAllowedMethodError.php
            │  ├─ SecurityNotAllowedPropertyError.php
            │  ├─ SecurityNotAllowedTagError.php
            │  ├─ SecurityPolicy.php
            │  └─ SecurityPolicyInterface.php
            ├─ Source.php
            ├─ Template.php
            ├─ TemplateWrapper.php
            ├─ Test
            │  ├─ IntegrationTestCase.php
            │  └─ NodeTestCase.php
            ├─ Token.php
            ├─ TokenParser
            │  ├─ AbstractTokenParser.php
            │  ├─ ApplyTokenParser.php
            │  ├─ AutoEscapeTokenParser.php
            │  ├─ BlockTokenParser.php
            │  ├─ DeprecatedTokenParser.php
            │  ├─ DoTokenParser.php
            │  ├─ EmbedTokenParser.php
            │  ├─ ExtendsTokenParser.php
            │  ├─ FlushTokenParser.php
            │  ├─ ForTokenParser.php
            │  ├─ FromTokenParser.php
            │  ├─ IfTokenParser.php
            │  ├─ ImportTokenParser.php
            │  ├─ IncludeTokenParser.php
            │  ├─ MacroTokenParser.php
            │  ├─ SandboxTokenParser.php
            │  ├─ SetTokenParser.php
            │  ├─ TokenParserInterface.php
            │  ├─ UseTokenParser.php
            │  └─ WithTokenParser.php
            ├─ TokenStream.php
            ├─ TwigFilter.php
            ├─ TwigFunction.php
            ├─ TwigTest.php
            └─ Util
               ├─ DeprecationCollector.php
               └─ TemplateDirIterator.php

```