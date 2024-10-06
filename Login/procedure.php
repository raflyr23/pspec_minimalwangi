Procedure login(username: string ; password: string);
var
    user = record
        username : string;
        password : string;
    end;
    login-status : string;
begin
    if (username = user.username) and (password = user.password) then
        login-status := 'Success';
    else
        login-status := 'Failed';
    end if;
end;
