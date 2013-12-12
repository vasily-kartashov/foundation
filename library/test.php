<?php
// auto-generated file, do not edit
spl_autoload_register(function($className) {
    static $map;
    if (!is_array($map)) {
        $map = array(
			'core\\request\\RequestTestCase' => __DIR__ . '/test/core/request/RequestTestCase.php',
			'SimpleArguments' => __DIR__ . '/test/vendors/simpletest-1.1.0/arguments.php',
			'SimpleHelp' => __DIR__ . '/test/vendors/simpletest-1.1.0/arguments.php',
			'SimpleRealm' => __DIR__ . '/test/vendors/simpletest-1.1.0/authentication.php',
			'SimpleAuthenticator' => __DIR__ . '/test/vendors/simpletest-1.1.0/authentication.php',
			'SimpleBrowserHistory' => __DIR__ . '/test/vendors/simpletest-1.1.0/browser.php',
			'SimpleBrowser' => __DIR__ . '/test/vendors/simpletest-1.1.0/browser.php',
			'SimpleCollector' => __DIR__ . '/test/vendors/simpletest-1.1.0/collector.php',
			'SimplePatternCollector' => __DIR__ . '/test/vendors/simpletest-1.1.0/collector.php',
			'SimpleTestCompatibility' => __DIR__ . '/test/vendors/simpletest-1.1.0/compatibility.php',
			'SimpleCookie' => __DIR__ . '/test/vendors/simpletest-1.1.0/cookies.php',
			'SimpleCookieJar' => __DIR__ . '/test/vendors/simpletest-1.1.0/cookies.php',
			'SimpleCommandLineParser' => __DIR__ . '/test/vendors/simpletest-1.1.0/default_reporter.php',
			'DefaultReporter' => __DIR__ . '/test/vendors/simpletest-1.1.0/default_reporter.php',
			'DetachedTestCase' => __DIR__ . '/test/vendors/simpletest-1.1.0/detached.php',
			'SimpleDumper' => __DIR__ . '/test/vendors/simpletest-1.1.0/dumper.php',
			'EclipseReporter' => __DIR__ . '/test/vendors/simpletest-1.1.0/eclipse.php',
			'EclipseInvoker' => __DIR__ . '/test/vendors/simpletest-1.1.0/eclipse.php',
			'SimpleEncodedPair' => __DIR__ . '/test/vendors/simpletest-1.1.0/encoding.php',
			'SimpleAttachment' => __DIR__ . '/test/vendors/simpletest-1.1.0/encoding.php',
			'SimpleEncoding' => __DIR__ . '/test/vendors/simpletest-1.1.0/encoding.php',
			'SimpleGetEncoding' => __DIR__ . '/test/vendors/simpletest-1.1.0/encoding.php',
			'SimpleHeadEncoding' => __DIR__ . '/test/vendors/simpletest-1.1.0/encoding.php',
			'SimpleDeleteEncoding' => __DIR__ . '/test/vendors/simpletest-1.1.0/encoding.php',
			'SimpleEntityEncoding' => __DIR__ . '/test/vendors/simpletest-1.1.0/encoding.php',
			'SimplePostEncoding' => __DIR__ . '/test/vendors/simpletest-1.1.0/encoding.php',
			'SimplePutEncoding' => __DIR__ . '/test/vendors/simpletest-1.1.0/encoding.php',
			'SimpleMultipartEncoding' => __DIR__ . '/test/vendors/simpletest-1.1.0/encoding.php',
			'SimpleErrorTrappingInvoker' => __DIR__ . '/test/vendors/simpletest-1.1.0/errors.php',
			'SimpleErrorQueue' => __DIR__ . '/test/vendors/simpletest-1.1.0/errors.php',
			'SimpleExceptionTrappingInvoker' => __DIR__ . '/test/vendors/simpletest-1.1.0/exceptions.php',
			'ExceptionExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/exceptions.php',
			'SimpleExceptionTrap' => __DIR__ . '/test/vendors/simpletest-1.1.0/exceptions.php',
			'SimpleExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'AnythingExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'FailedExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'TrueExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'FalseExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'EqualExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'NotEqualExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'WithinMarginExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'OutsideMarginExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'ReferenceExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'IdenticalExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'NotIdenticalExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'PatternExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'NoPatternExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'IsAExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'NotAExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'MethodExistsExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'MemberExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/expectation.php',
			'PHPUnit_TestCase' => __DIR__ . '/test/vendors/simpletest-1.1.0/extensions/pear_test_case.php',
			'TestOfTestDoxReporter' => __DIR__ . '/test/vendors/simpletest-1.1.0/extensions/testdox/test.php',
			'TestDoxReporter' => __DIR__ . '/test/vendors/simpletest-1.1.0/extensions/testdox.php',
			'SimpleForm' => __DIR__ . '/test/vendors/simpletest-1.1.0/form.php',
			'SimpleFrameset' => __DIR__ . '/test/vendors/simpletest-1.1.0/frames.php',
			'SimpleRoute' => __DIR__ . '/test/vendors/simpletest-1.1.0/http.php',
			'SimpleProxyRoute' => __DIR__ . '/test/vendors/simpletest-1.1.0/http.php',
			'SimpleHttpRequest' => __DIR__ . '/test/vendors/simpletest-1.1.0/http.php',
			'SimpleHttpHeaders' => __DIR__ . '/test/vendors/simpletest-1.1.0/http.php',
			'SimpleHttpResponse' => __DIR__ . '/test/vendors/simpletest-1.1.0/http.php',
			'SimpleInvoker' => __DIR__ . '/test/vendors/simpletest-1.1.0/invoker.php',
			'SimpleInvokerDecorator' => __DIR__ . '/test/vendors/simpletest-1.1.0/invoker.php',
			'ParametersExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/mock_objects.php',
			'CallCountExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/mock_objects.php',
			'MinimumCallCountExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/mock_objects.php',
			'MaximumCallCountExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/mock_objects.php',
			'SimpleSignatureMap' => __DIR__ . '/test/vendors/simpletest-1.1.0/mock_objects.php',
			'SimpleCallSchedule' => __DIR__ . '/test/vendors/simpletest-1.1.0/mock_objects.php',
			'SimpleReturn' => __DIR__ . '/test/vendors/simpletest-1.1.0/mock_objects.php',
			'SimpleByReference' => __DIR__ . '/test/vendors/simpletest-1.1.0/mock_objects.php',
			'SimpleByValue' => __DIR__ . '/test/vendors/simpletest-1.1.0/mock_objects.php',
			'SimpleThrower' => __DIR__ . '/test/vendors/simpletest-1.1.0/mock_objects.php',
			'SimpleErrorThrower' => __DIR__ . '/test/vendors/simpletest-1.1.0/mock_objects.php',
			'SimpleMock' => __DIR__ . '/test/vendors/simpletest-1.1.0/mock_objects.php',
			'Mock' => __DIR__ . '/test/vendors/simpletest-1.1.0/mock_objects.php',
			'MockGenerator' => __DIR__ . '/test/vendors/simpletest-1.1.0/mock_objects.php',
			'SimplePage' => __DIR__ . '/test/vendors/simpletest-1.1.0/page.php',
			'ParallelRegex' => __DIR__ . '/test/vendors/simpletest-1.1.0/php_parser.php',
			'SimpleStateStack' => __DIR__ . '/test/vendors/simpletest-1.1.0/php_parser.php',
			'SimpleLexer' => __DIR__ . '/test/vendors/simpletest-1.1.0/php_parser.php',
			'SimpleHtmlLexer' => __DIR__ . '/test/vendors/simpletest-1.1.0/php_parser.php',
			'SimpleHtmlSaxParser' => __DIR__ . '/test/vendors/simpletest-1.1.0/php_parser.php',
			'SimplePhpPageBuilder' => __DIR__ . '/test/vendors/simpletest-1.1.0/php_parser.php',
			'SimpleResult' => __DIR__ . '/test/vendors/simpletest-1.1.0/recorder.php',
			'SimpleResultOfPass' => __DIR__ . '/test/vendors/simpletest-1.1.0/recorder.php',
			'SimpleResultOfFail' => __DIR__ . '/test/vendors/simpletest-1.1.0/recorder.php',
			'SimpleResultOfException' => __DIR__ . '/test/vendors/simpletest-1.1.0/recorder.php',
			'Recorder' => __DIR__ . '/test/vendors/simpletest-1.1.0/recorder.php',
			'SimpleReflection' => __DIR__ . '/test/vendors/simpletest-1.1.0/reflection_php5.php',
			'RemoteTestCase' => __DIR__ . '/test/vendors/simpletest-1.1.0/remote.php',
			'HtmlReporter' => __DIR__ . '/test/vendors/simpletest-1.1.0/reporter.php',
			'TextReporter' => __DIR__ . '/test/vendors/simpletest-1.1.0/reporter.php',
			'SelectiveReporter' => __DIR__ . '/test/vendors/simpletest-1.1.0/reporter.php',
			'NoSkipsReporter' => __DIR__ . '/test/vendors/simpletest-1.1.0/reporter.php',
			'SimpleScorer' => __DIR__ . '/test/vendors/simpletest-1.1.0/scorer.php',
			'SimpleReporter' => __DIR__ . '/test/vendors/simpletest-1.1.0/scorer.php',
			'SimpleReporterDecorator' => __DIR__ . '/test/vendors/simpletest-1.1.0/scorer.php',
			'MultipleReporter' => __DIR__ . '/test/vendors/simpletest-1.1.0/scorer.php',
			'SimpleByName' => __DIR__ . '/test/vendors/simpletest-1.1.0/selector.php',
			'SimpleByLabel' => __DIR__ . '/test/vendors/simpletest-1.1.0/selector.php',
			'SimpleById' => __DIR__ . '/test/vendors/simpletest-1.1.0/selector.php',
			'SimpleByLabelOrName' => __DIR__ . '/test/vendors/simpletest-1.1.0/selector.php',
			'SimpleShell' => __DIR__ . '/test/vendors/simpletest-1.1.0/shell_tester.php',
			'ShellTestCase' => __DIR__ . '/test/vendors/simpletest-1.1.0/shell_tester.php',
			'SimpleTest' => __DIR__ . '/test/vendors/simpletest-1.1.0/simpletest.php',
			'SimpleTestContext' => __DIR__ . '/test/vendors/simpletest-1.1.0/simpletest.php',
			'SimpleStackTrace' => __DIR__ . '/test/vendors/simpletest-1.1.0/simpletest.php',
			'SimpleStickyError' => __DIR__ . '/test/vendors/simpletest-1.1.0/socket.php',
			'SimpleFileSocket' => __DIR__ . '/test/vendors/simpletest-1.1.0/socket.php',
			'SimpleSocket' => __DIR__ . '/test/vendors/simpletest-1.1.0/socket.php',
			'SimpleSecureSocket' => __DIR__ . '/test/vendors/simpletest-1.1.0/socket.php',
			'SimpleTagBuilder' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleBaseTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleTitleTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleAnchorTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleWidget' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleTextTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleSubmitTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleImageSubmitTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleButtonTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleTextAreaTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleUploadTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleSelectionTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'MultipleSelectionTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleOptionTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleRadioButtonTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleCheckboxTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleTagGroup' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleCheckboxGroup' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleRadioGroup' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleLabelTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleFormTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleFrameTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/tag.php',
			'SimpleTestAcceptanceTest' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestOfLiveBrowser' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestOfLocalFileBrowser' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestOfRequestMethods' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestRadioFields' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestOfLiveFetching' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestOfLinkFollowing' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestOfLivePageLinkingWithMinimalLinks' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestOfLiveFrontControllerEmulation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestOfLiveHeaders' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestOfLiveRedirects' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestOfLiveCookies' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'LiveTestOfForms' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestOfLiveMultiValueWidgets' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestOfFileUploads' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestOfLiveHistoryNavigation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestOfLiveAuthentication' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestOfLoadingFrames' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestOfFrameAuthentication' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'TestOfNestedFrames' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/acceptance_test.php',
			'SameTestClass' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/adapter_test.php',
			'TestOfPearAdapter' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/adapter_test.php',
			'AllTests' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/all_tests.php',
			'TestOfCommandLineArgumentParsing' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/arguments_test.php',
			'TestOfHelpOutput' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/arguments_test.php',
			'TestOfRealm' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/authentication_test.php',
			'TestOfAuthenticator' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/authentication_test.php',
			'TestOfAutorun' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/autorun_test.php',
			'BadTestCases' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/bad_test_suite.php',
			'TestOfHistory' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/browser_test.php',
			'TestOfParsedPageAccess' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/browser_test.php',
			'TestOfBrowserNavigation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/browser_test.php',
			'TestOfBrowserFrames' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/browser_test.php',
			'PathEqualExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/collector_test.php',
			'TestOfCollector' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/collector_test.php',
			'TestOfPatternCollector' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/collector_test.php',
			'TestOfCommandLineParsing' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/command_line_test.php',
			'ComparisonClass' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/compatibility_test.php',
			'ComparisonSubclass' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/compatibility_test.php',
			'ComparisonInterface' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/compatibility_test.php',
			'ComparisonClassWithInterface' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/compatibility_test.php',
			'TestOfCompatibility' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/compatibility_test.php',
			'TestOfCookie' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/cookies_test.php',
			'TestOfCookieJar' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/cookies_test.php',
			'DumperDummy' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/dumper_test.php',
			'TestOfTextFormatting' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/dumper_test.php',
			'TestOfEclipse' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/eclipse_test.php',
			'TestOfEncodedParts' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/encoding_test.php',
			'TestOfEncoding' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/encoding_test.php',
			'TestOfEncodingHeaders' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/encoding_test.php',
			'TestOfErrorQueue' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/errors_test.php',
			'TestOfErrorTrap' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/errors_test.php',
			'TestOfErrors' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/errors_test.php',
			'TestOfPHP52RecoverableErrors' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/errors_test.php',
			'TestOfErrorsExcludingPHP52AndAbove' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/errors_test.php',
			'TestOfNotEnoughErrors' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/errors_test.php',
			'TestOfLeftOverErrors' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/errors_test.php',
			'TestRunnerForLeftOverAndNotEnoughErrors' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/errors_test.php',
			'MyTestException' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/exceptions_test.php',
			'HigherTestException' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/exceptions_test.php',
			'OtherTestException' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/exceptions_test.php',
			'TestOfExceptionExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/exceptions_test.php',
			'TestOfExceptionTrap' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/exceptions_test.php',
			'TestOfCatchingExceptions' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/exceptions_test.php',
			'TestOfIgnoringExceptions' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/exceptions_test.php',
			'TestOfCallingTearDownAfterExceptions' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/exceptions_test.php',
			'TestOfExceptionThrownInSetUpDoesNotRunTestBody' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/exceptions_test.php',
			'TestOfExpectExceptionWithSetUp' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/exceptions_test.php',
			'TestOfThrowingExceptionsInTearDown' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/exceptions_test.php',
			'TestOfEquality' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/expectation_test.php',
			'TestOfWithin' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/expectation_test.php',
			'TestOfInequality' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/expectation_test.php',
			'RecursiveNasty' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/expectation_test.php',
			'OpaqueContainer' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/expectation_test.php',
			'DerivedOpaqueContainer' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/expectation_test.php',
			'TestOfIdentity' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/expectation_test.php',
			'TransparentContainer' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/expectation_test.php',
			'TestOfMemberComparison' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/expectation_test.php',
			'DummyReferencedObject' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/expectation_test.php',
			'TestOfReference' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/expectation_test.php',
			'TestOfNonIdentity' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/expectation_test.php',
			'TestOfPatterns' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/expectation_test.php',
			'ExpectedMethodTarget' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/expectation_test.php',
			'TestOfMethodExistence' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/expectation_test.php',
			'TestOfIsA' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/expectation_test.php',
			'TestOfNotA' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/expectation_test.php',
			'TestOfForm' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/form_test.php',
			'TestOfFrameset' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/frames_test.php',
			'TestOfFrameNavigation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/frames_test.php',
			'TestOfFramesetPageInterface' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/frames_test.php',
			'TestOfDirectRoute' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/http_test.php',
			'TestOfProxyRoute' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/http_test.php',
			'TestOfHttpRequest' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/http_test.php',
			'TestOfHttpPostRequest' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/http_test.php',
			'TestOfHttpHeaders' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/http_test.php',
			'TestOfHttpResponse' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/http_test.php',
			'DummyInterface' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/interfaces_test.php',
			'TestOfMockInterfaces' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/interfaces_test.php',
			'TestOfSpl' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/interfaces_test.php',
			'WithHint' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/interfaces_test.php',
			'ImplementsDummy' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/interfaces_test.php',
			'TestOfImplementations' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/interfaces_test.php',
			'SampleInterfaceWithConstruct' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/interfaces_test.php',
			'TestOfInterfaceMocksWithConstruct' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/interfaces_test.php',
			'SampleInterfaceWithClone' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/interfaces_test.php',
			'TestOfSampleInterfaceWithClone' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/interfaces_test.php',
			'SampleInterfaceWithHintInSignature' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/interfaces_test_php5_1.php',
			'TestOfInterfaceMocksWithHintInSignature' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/interfaces_test_php5_1.php',
			'LiveHttpTestCase' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/live_test.php',
			'TestOfAnythingExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfParametersExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfSimpleSignatureMap' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfCallSchedule' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'Dummy' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/visual_test.php',
			'TestOfMockGeneration' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfMockReturns' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfMockExpectationsThatPass' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'MockWithInjectedTestCase' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'LikeExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfMockExpectations' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfMockComparisons' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'ClassWithSpecialMethods' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfSpecialMethodsAfterPHP51' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfSpecialMethods' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'WithStaticMethod' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfMockingClassesWithStaticMethods' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'MockTestException' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfThrowingExceptionsFromMocks' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfThrowingErrorsFromMocks' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfPartialMocks' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'ConstructorSuperClass' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'ConstructorSubClass' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfPHP4StyleSuperClassConstruct' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfPHP5StaticMethodMocking' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfPHP5AbstractMethodMocking' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'DummyWithProtected' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfProtectedMethodPartialMocks' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/mock_objects_test.php',
			'TestOfPageInterface' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/page_test.php',
			'TestOfPageHeaders' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/page_test.php',
			'TestOfHtmlStrippingAndNormalisation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/page_test.php',
			'TestOfParsing' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/parsing_test.php',
			'TestOfParsingUsingPhpParser' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/parsing_test.php',
			'TestOfParsingUsingTidyParser' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/parsing_test.php',
			'TestOfParallelRegex' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/php_parser_test.php',
			'TestOfStateStack' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/php_parser_test.php',
			'TestParser' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/php_parser_test.php',
			'TestOfLexer' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/php_parser_test.php',
			'TestOfLexerModes' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/php_parser_test.php',
			'TestOfLexerHandlers' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/php_parser_test.php',
			'TestOfSimpleHtmlLexer' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/php_parser_test.php',
			'TestOfHtmlSaxParser' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/php_parser_test.php',
			'TestOfRecorder' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/recorder_test.php',
			'AnyOldLeafClass' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'AnyOldClass' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'AnyOldLeafClassWithAFinal' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'AnyOldInterface' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'AnyOldArgumentInterface' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'AnyDescendentInterface' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'AnyOldImplementation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'AnyAbstractImplementation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'AnotherOldAbstractClass' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'AnyOldSubclass' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'AnyOldArgumentClass' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'AnyOldArgumentImplementation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'AnyOldTypeHintedClass' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'AnyDescendentImplementation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'AnyOldOverloadedClass' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'AnyOldClassWithStaticMethods' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'AnyOldAbstractClassWithAbstractMethods' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'TestOfReflection' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'TestOfReflectionWithTypeHints' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'TestOfAbstractsWithAbstractMethods' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/reflection_php5_test.php',
			'TestOfShell' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/shell_test.php',
			'TestOfShellTesterAndShell' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/shell_test.php',
			'TestOfShellTestCase' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/shell_tester_test.php',
			'ShouldNeverBeRun' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/simpletest_test.php',
			'ShouldNeverBeRunEither' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/simpletest_test.php',
			'TestOfStackTrace' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/simpletest_test.php',
			'DummyResource' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/simpletest_test.php',
			'TestOfContext' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/simpletest_test.php',
			'TestOfSimpleStickyError' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/socket_test.php',
			'FailingTest' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/support/failing_test.php',
			'PassingTest' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/support/passing_test.php',
			'SampleTestForRecorder' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/support/recorder_sample.php',
			'IteratorImplementation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/support/spl_examples.php',
			'IteratorAggregateImplementation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/support/spl_examples.php',
			'test1' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/support/test1.php',
			'TestOfTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/tag_test.php',
			'TestOfWidget' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/tag_test.php',
			'TestOfTextArea' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/tag_test.php',
			'TestOfCheckbox' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/tag_test.php',
			'TestOfSelection' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/tag_test.php',
			'TestOfRadioGroup' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/tag_test.php',
			'TestOfTagGroup' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/tag_test.php',
			'TestOfUploadWidget' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/tag_test.php',
			'TestOfLabelTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/tag_test.php',
			'TestCaseWithParseError' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/test_with_parse_error.php',
			'ReferenceForTesting' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/unit_tester_test.php',
			'TestOfUnitTester' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/unit_tester_test.php',
			'UnitTests' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/unit_tests.php',
			'TestOfUrl' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/url_test.php',
			'TestOfAbsoluteUrls' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/url_test.php',
			'TestOfFrameUrl' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/url_test.php',
			'TestOfFileUrl' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/url_test.php',
			'TestOfFetchingUrlParameters' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/user_agent_test.php',
			'TestOfAdditionalHeaders' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/user_agent_test.php',
			'TestOfBrowserCookies' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/user_agent_test.php',
			'TestOfHttpRedirects' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/user_agent_test.php',
			'TestOfBadHosts' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/user_agent_test.php',
			'TestOfAuthorisation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/user_agent_test.php',
			'TestDisplayClass' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/visual_test.php',
			'PassingUnitTestCaseOutput' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/visual_test.php',
			'FailingUnitTestCaseOutput' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/visual_test.php',
			'TestOfMockObjectsOutput' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/visual_test.php',
			'TestOfPastBugs' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/visual_test.php',
			'TestOfVisualShell' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/visual_test.php',
			'PassesAsWellReporter' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/visual_test.php',
			'TestOfSkippingNoMatterWhat' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/visual_test.php',
			'TestOfSkippingOrElse' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/visual_test.php',
			'TestOfSkippingTwiceOver' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/visual_test.php',
			'TestThatShouldNotBeSkipped' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/visual_test.php',
			'TestOfFieldExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/web_tester_test.php',
			'TestOfHeaderExpectations' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/web_tester_test.php',
			'TestOfTextExpectations' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/web_tester_test.php',
			'TestOfGenericAssertionsInWebTester' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/web_tester_test.php',
			'TestOfNestingTags' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/xml_test.php',
			'TestOfXmlStructureParsing' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/xml_test.php',
			'AnyOldSignal' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/xml_test.php',
			'TestOfXmlResultsParsing' => __DIR__ . '/test/vendors/simpletest-1.1.0/test/xml_test.php',
			'SimpleTestCase' => __DIR__ . '/test/vendors/simpletest-1.1.0/test_case.php',
			'SimpleFileLoader' => __DIR__ . '/test/vendors/simpletest-1.1.0/test_case.php',
			'TestSuite' => __DIR__ . '/test/vendors/simpletest-1.1.0/test_case.php',
			'BadTestSuite' => __DIR__ . '/test/vendors/simpletest-1.1.0/test_case.php',
			'SimpleTidyPageBuilder' => __DIR__ . '/test/vendors/simpletest-1.1.0/tidy_parser.php',
			'UnitTestCase' => __DIR__ . '/test/vendors/simpletest-1.1.0/unit_tester.php',
			'SimpleUrl' => __DIR__ . '/test/vendors/simpletest-1.1.0/url.php',
			'SimpleUserAgent' => __DIR__ . '/test/vendors/simpletest-1.1.0/user_agent.php',
			'FieldExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/web_tester.php',
			'HttpHeaderExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/web_tester.php',
			'NoHttpHeaderExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/web_tester.php',
			'TextExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/web_tester.php',
			'NoTextExpectation' => __DIR__ . '/test/vendors/simpletest-1.1.0/web_tester.php',
			'WebTestCase' => __DIR__ . '/test/vendors/simpletest-1.1.0/web_tester.php',
			'XmlReporter' => __DIR__ . '/test/vendors/simpletest-1.1.0/xml.php',
			'NestingXmlTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/xml.php',
			'NestingMethodTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/xml.php',
			'NestingCaseTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/xml.php',
			'NestingGroupTag' => __DIR__ . '/test/vendors/simpletest-1.1.0/xml.php',
			'SimpleTestXmlParser' => __DIR__ . '/test/vendors/simpletest-1.1.0/xml.php',
        );
    }
    if (isset($map[$className])) {
        /** @noinspection PhpIncludeInspection */
        require($map[$className]);
        return true;
    }
    return false;
});