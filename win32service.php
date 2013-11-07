<?php
/**
 * The service runs in its own process.
 */
const WIN32_SERVICE_WIN32_OWN_PROCESS = 0x00000010;

/**
 * The service can interact with the desktop. This option is not available on Windows Vista or later.
 */
const WIN32_SERVICE_INTERACTIVE_PROCESS = 0x00000100;

/**
 * The service runs in its own process and can interact with the desktop. This option is not available on Windows Vista or later.
 */
const WIN32_SERVICE_WIN32_OWN_PROCESS_INTERACTIVE = 0x00000110;

/**
 * The service continue is pending.
 */
const WIN32_SERVICE_CONTINUE_PENDING = 0x00000005;

/**
 * The service pause is pending.
 */
const WIN32_SERVICE_PAUSE_PENDING = 0x00000006;

/**
 * The service is paused.
 */
const WIN32_SERVICE_PAUSED = 0x00000007;

/**
 * The service is running.
 */
const WIN32_SERVICE_RUNNING = 0x00000004;

/**
 * The service is starting.
 */
const WIN32_SERVICE_START_PENDING = 0x00000002;

/**
 * The service is stopping.
 */
const WIN32_SERVICE_STOP_PENDING = 0x00000003;

/**
 * The service is not running.
 */
const WIN32_SERVICE_STOPPED = 0x00000001;

/**
 * Notifies a paused service that it should resume.
 */
const WIN32_SERVICE_CONTROL_CONTINUE = 0x00000003;
/**
 * Notifies a service that it should report its current status information to the service control manager.
 */
const WIN32_SERVICE_CONTROL_INTERROGATE = 0x00000004;

/**
 * Notifies a service that it should pause.
 */
const WIN32_SERVICE_CONTROL_PAUSE = 0x00000002;

/**
 * Notifies a service that the system will be shutting down. A service that handles this notification blocks system shutdown until the service stops or the preshutdown time-out interval expires. This value is not supported by Windows Server 2003 and Windows XP/2000.
 */
const WIN32_SERVICE_CONTROL_PRESHUTDOWN = 0x0000000F;

/**
 * Notifies a service that the system is shutting down so the service can perform cleanup tasks. If a service accepts this control code, it must stop after it performs its cleanup tasks. After the SCM sends this control code, it will not send other control codes to the service.
 */
const WIN32_SERVICE_CONTROL_SHUTDOWN = 0x00000005;

/**
 * Notifies a service that it should stop.
 */
const WIN32_SERVICE_CONTROL_STOP = 0x00000001;

/**
 * The service can be paused and continued. This control code allows the service to receive WIN32_SERVICE_CONTROL_PAUSE and WIN32_SERVICE_CONTROL_CONTINUE notifications.
 */
const WIN32_SERVICE_ACCEPT_PAUSE_CONTINUE = 0x00000002;

/**
 * The service can perform preshutdown tasks. This control code enables the service to receive WIN32_SERVICE_CONTROL_PRESHUTDOWN notifications. This value is not supported by Windows Server 2003 and Windows XP/2000.
 */
const WIN32_SERVICE_ACCEPT_PRESHUTDOWN = 0x00000100;

/**
 * The service is notified when system shutdown occurs. This control code allows the service to receive WIN32_SERVICE_CONTROL_SHUTDOWN notifications.
 */
const WIN32_SERVICE_ACCEPT_SHUTDOWN = 0x00000004;

/**
 * The service can be stopped. This control code allows the service to receive WIN32_SERVICE_CONTROL_STOP notifications.
 */
const WIN32_SERVICE_ACCEPT_STOP = 0x00000001;

/**
 * A service started automatically by the service control manager during system startup.
 */
const WIN32_SERVICE_AUTO_START = 0x00000002;

/**
 * A service started by the service control manager when a process calls the StartService function.
 */
const WIN32_SERVICE_DEMAND_START = 0x00000003;

/**
 * A service that cannot be started. Attempts to start the service result in the error code WIN32_ERROR_SERVICE_DISABLED.
 */
const WIN32_SERVICE_DISABLED = 0x00000004;

/**
 * The startup program ignores the error and continues the startup operation.
 */
const WIN32_SERVICE_ERROR_IGNORE = 0x00000000;

/**
 * The startup program logs the error in the event log but continues the startup operation.
 */
const WIN32_SERVICE_ERROR_NORMAL = 0x00000001;

/**
 * The service runs in a system process that must always be running.
 */
const WIN32_SERVICE_RUNS_IN_SYSTEM_PROCESS = 0x00000001;

/**
 * The handle to the SCM database does not have the appropriate access rights.
 */
const WIN32_ERROR_ACCESS_DENIED = 0x00000005;

/**
 * A circular service dependency was specified.
 */
const WIN32_ERROR_CIRCULAR_DEPENDENCY = 0x00000423;

/**
 * The specified database does not exist.
 */
const WIN32_ERROR_DATABASE_DOES_NOT_EXIST = 0x00000429;

/**
 * The service cannot be stopped because other running services are dependent on it.
 */
const WIN32_ERROR_DEPENDENT_SERVICES_RUNNING = 0x0000041B;

/**
 * The display name already exists in the service control manager database either as a service name or as another display name.
 */
const WIN32_ERROR_DUPLICATE_SERVICE_NAME = 0x00000436;

/**
 * This error is returned if the program is being run as a console application rather than as a service. If the program will be run as a console application for debugging purposes, structure it such that service-specific code is not called.
 */
const WIN32_ERROR_FAILED_SERVICE_CONTROLLER_CONNECT = 0x00000427;

/**
 * The buffer is too small for the service status structure. Nothing was written to the structure.
 */
const WIN32_ERROR_INSUFFICIENT_BUFFER = 0x0000007A;

/**
 * The specified service status structure is invalid.
 */
const WIN32_ERROR_INVALID_DATA = 0x0000000D;

/**
 * The handle to the specified service control manager database is invalid.
 */
const WIN32_ERROR_INVALID_HANDLE = 0x00000006;

/**
 * The InfoLevel parameter contains an unsupported value.
 */
const WIN32_ERROR_INVALID_LEVEL = 0x0000007C;

/**
 * The specified service name is invalid.
 */
const WIN32_ERROR_INVALID_NAME = 0x0000007B;

/**
 * A parameter that was specified is invalid.
 */
const WIN32_ERROR_INVALID_PARAMETER = 0x00000057;

/**
 * The user account name specified in the user parameter does not exist. See win32_create_service
 */
const WIN32_ERROR_INVALID_SERVICE_ACCOUNT = 0x00000421;

/**
 * The requested control code is not valid, or it is unacceptable to the service.
 */
const WIN32_ERROR_INVALID_SERVICE_CONTROL = 0x0000041C;

/**
 * The service binary file could not be found.
 */
const WIN32_ERROR_PATH_NOT_FOUND = 0x00000003;

/**
 * An instance of the service is already running.
 */
const WIN32_ERROR_SERVICE_ALREADY_RUNNING = 0x00000420;

/**
 * The requested control code cannot be sent to the service because the state of the service is WIN32_SERVICE_STOPPED, WIN32_SERVICE_START_PENDING, or WIN32_SERVICE_STOP_PENDING.
 */
const WIN32_ERROR_SERVICE_CANNOT_ACCEPT_CTRL = 0x00000425;

/**
 * The database is locked.
 */
const WIN32_ERROR_SERVICE_DATABASE_LOCKED = 0x0000041F;

/**
 * The service depends on a service that does not exist or has been marked for deletion.
 */
const WIN32_ERROR_SERVICE_DEPENDENCY_DELETED = 0x00000433;

/**
 * The service depends on another service that has failed to start.
 */
const WIN32_ERROR_SERVICE_DEPENDENCY_FAIL = 0x0000042C;

/**
 * The service has been disabled.
 */
const WIN32_ERROR_SERVICE_DISABLED = 0x00000422;

/**
 * The specified service does not exist as an installed service.
 */
const WIN32_ERROR_SERVICE_DOES_NOT_EXIST = 0x00000424;

/**
 * The specified service already exists in this database.
 */
const WIN32_ERROR_SERVICE_EXISTS = 0x00000431;

/**
 * The service did not start due to a logon failure. This error occurs if the service is configured to run under an account that does not have the "Log on as a service" right .
 */
const WIN32_ERROR_SERVICE_LOGON_FAILED = 0x0000042D;

/**
 * The specified service has already been marked for deletion.
 */
const WIN32_ERROR_SERVICE_MARKED_FOR_DELETE = 0x00000430;

/**
 * A thread could not be created for the service.
 */
const WIN32_ERROR_SERVICE_NO_THREAD = 0x0000041E;

/**
 * The service has not been started.
 */
const WIN32_ERROR_SERVICE_NOT_ACTIVE = 0x00000426;

/**
 * The process for the service was started, but it did not call StartServiceCtrlDispatcher, or the thread that called StartServiceCtrlDispatcher may be blocked in a control handler function.
 */
const WIN32_ERROR_SERVICE_REQUEST_TIMEOUT = 0x0000041D;

/**
 * The system is shutting down; this function cannot be called.
 */
const WIN32_ERROR_SHUTDOWN_IN_PROGRESS = 0x0000045B;

/**
 * No error.
 */
const WIN32_NO_ERROR = 0x00000000;

/**
 * Process that has priority above WIN32_NORMAL_PRIORITY_CLASS but below WIN32_HIGH_PRIORITY_CLASS.
 */
const WIN32_ABOVE_NORMAL_PRIORITY_CLASS = 0x00008000;

/**
 * Process that has priority above WIN32_IDLE_PRIORITY_CLASS but below WIN32_NORMAL_PRIORITY_CLASS.
 */
const WIN32_BELOW_NORMAL_PRIORITY_CLASS = 0x00004000;

/**
 * Process that performs time-critical tasks that must be executed immediately. The threads of the process preempt the threads of normal or idle priority class processes. An example is the Task List, which must respond quickly when called by the user, regardless of the load on the operating system. Use extreme care when using the high-priority class, because a high-priority class application can use nearly all available CPU time.
 */
const WIN32_HIGH_PRIORITY_CLASS = 0x00000080;

/**
 * Process whose threads run only when the system is idle. The threads of the process are preempted by the threads of any process running in a higher priority class. An example is a screen saver. The idle-priority class is inherited by child processes.
 */
const WIN32_IDLE_PRIORITY_CLASS = 0x00000040;

/**
 * Process with no special scheduling needs.
 */
const WIN32_NORMAL_PRIORITY_CLASS = 0x00000020;

/**
 * Process that has the highest possible priority. The threads of the process preempt the threads of all other processes, including operating system processes performing important tasks. For example, a real-time process that executes for more than a very brief interval can cause disk caches not to flush or cause the mouse to be unresponsive.
 */
const WIN32_REALTIME_PRIORITY_CLASS = 0x00000100;

/**
 * Resumes a paused, named service. Requires administrative privileges.
 *
 * @param string $servicename The short name of the service.
 * @param string $machine     Optional machine name. If omitted, the local machine is used.
 *
 * @return int
 */
function win32_continue_service($servicename, $machine = '')
{
}

/**
 * Tries to create a service
 *
 * @param array  $details An array of service details
 * @param string $machine The optional machine name on which you want to create a service. If omitted, it will use the local machine.
 *
 * @example win32_create_service(array(
'service'     => 'dummyphp',                                           # the name of your service
'display'     => 'sample dummy PHP service',                           # short description
'description' => 'This is a dummy Windows service created using PHP.', # long description
'params'      => '"' . __FILE__ . '"  run',                            # path to the script and parameters
));
 *
 * @return mixed
 */
function win32_create_service(array $details, $machine = '')
{
}

/**
 * Attempts to delete a service from the SCM database. Administrative privileges are required for this to succeed.
 *
 * This function really just marks the service for deletion.
 * If other processes (such as the Services Applet) are open, then the deletion will be deferred until those applications are closed.
 * If a service is marked for deletion, further attempts to delete it will fail, and attempts to create a new service with that name will also fail.
 *
 * @param string $servicename The short name of the service.
 * @param string $machine     The optional machine name. If omitted, the local machine will be used.
 *
 * @example win32_delete_service('dummyphp');
 */
function win32_delete_service($servicename, $machine = '')
{
}

/**
 * Returns the control code that was last sent to this service process.
 * When running as a service you should periodically check this to determine if your service needs to stop running.
 *
 * @return int Returns a control constant which will be one of the Win32Service Service Control Message Constants: WIN32_SERVICE_CONTROL_CONTINUE, WIN32_SERVICE_CONTROL_INTERROGATE, WIN32_SERVICE_CONTROL_PAUSE, WIN32_SERVICE_CONTROL_PRESHUTDOWN, WIN32_SERVICE_CONTROL_SHUTDOWN, WIN32_SERVICE_CONTROL_STOP.
 */
function win32_get_last_control_message()
{
}

/**
 * Pauses a named service. Requires administrative privileges.
 *
 * @param string $servicename The short name of the service.
 * @param string $machine     Optional machine name. If omitted, the local machine is used.
 *
 * @return int
 */
function win32_pause_service($servicename, $machine = '')
{
}

/**
 * Queries the current status for a service, returning an array of information.
 *
 * @param string $servicename The short name of the service.
 * @param string $machine     Optional machine name. If omitted, the local machine is used.
 *
 * @return mixed
 */
function win32_query_service_status($servicename, $machine = '')
{
}

/**
 * Informs the SCM of the current status of a running service. This call is only valid for a running service process.
 *
 * @param int $status     The service status code, one of WIN32_SERVICE_RUNNING, WIN32_SERVICE_STOPPED, WIN32_SERVICE_STOP_PENDING, WIN32_SERVICE_START_PENDING, WIN32_SERVICE_CONTINUE_PENDING, WIN32_SERVICE_PAUSE_PENDING, WIN32_SERVICE_PAUSED.
 * @param int $checkpoint The checkpoint value the service increments periodically to report its progress during a lengthy start, stop, pause, or continue operation. For example, the service should increment this value as it completes each step of its initialization when it is starting up. The checkpoint is only valid when the status is one of WIN32_SERVICE_STOP_PENDING, WIN32_SERVICE_START_PENDING, WIN32_SERVICE_CONTINUE_PENDING or WIN32_SERVICE_PAUSE_PENDING.
 *
 * @return bool
 */
function win32_set_service_status($status, $checkpoint = 0)
{
}

/**
 * When launched via the Service Control Manager, a service process is required to "check-in" with it to establish service monitoring and communication facilities.
 * This function performs the check-in by spawning a thread to handle the lower-level communication with the service control manager.
 * Once started, the service process should do 2 things. The first is to tell the Service Control Manager that the service is running.
 * This is achieved by calling win32_set_service_status() with the WIN32_SERVICE_RUNNING constant. If you need to perform some lengthy process before the service is actually running, then you can use the WIN32_SERVICE_START_PENDING constant.
 * The second is to continue to check-in with the service control manager so that it can determine if it should terminate.
 * This is achieved by periodically calling win32_get_last_control_message() and handling the return code appropriately.
 *
 * @param string $name The short-name of the service, as registered by win32_create_service().
 *
 * @example if ($argv[1] == 'run') {
win32_start_service_ctrl_dispatcher('dummyphp');

while (WIN32_SERVICE_CONTROL_STOP != win32_get_last_control_message()) {
# do your work here.
# try not to take up more than 30 seconds before going around the loop
# again
}
}
 *
 * @return mixed
 */
function win32_start_service_ctrl_dispatcher($name)
{
}

/**
 * Attempts to start the named service. Usually requires administrative privileges.
 *
 * @param string $servicename The short name of the service.
 * @param string $machine     Optional machine name. If omitted, the local machine is used.
 *
 * @return int
 */
function win32_start_service($servicename, $machine = '')
{
}

/**
 * Stops a named service. Requires administrative privileges.
 *
 * @param string $servicename The short name of the service.
 * @param string $machine     Optional machine name. If omitted, the local machine is used.
 *
 * @return int
 */
function win32_stop_service($servicename, $machine = '')
{
}