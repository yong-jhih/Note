---------------in , out , inout
\d #
create procedure addCat(in newcat varchar(100)) 
begin
    insert into cats(cat) values (newcat);
end #
\d ;
----------------------------------------------
\d #
create procedure addCatV2(in newcat varchar(100)) 
begin
    declare exit handler for sqlstate '23000' 
    begin
        select 'Error!' ;
    end
    insert into cats (cat) values (newcat);
    select 'Success.' ;
end #
\d ;
----------------------------------------------
\d #
create procedure addCatV3(in newcat varchar(100)) 
begin
    declare continue handler for sqlstate '23000' 
    begin
        select 'Error!' ;
    end
    insert into cats (cat) values (newcat);
    select 'Success.' ;
end #
\d ;
----------------------------------------------
\d #
create procedure addCatV4(in newcat varchar(100)) 
begin
    declare continue handler for sqlstate '23000' 
    set @a = 1 ;
    insert into cats (cat) values (newcat);
    select 'Success.' ;
end #
\d ;
----------------------------------------------
\d #
create trigger addCatV2 after insert on products for each row
begin
    select count(*) into @count from cats where cat = new.cat ;
    if @count = 0 then
        insert into cats (cat) values (new.cat) ;
    end if ;
end #
\d ;
----------------------------------------------
\d #

begin
    
end #
\d ;
----------------------------------------------
\d #

begin
    
end #
\d ;
----------------------------------------------
\d #

begin
    
end #
\d ;
----------------------------------------------
\d #

begin
    
end #
\d ;
----------------------------------------------
\d #

begin
    
end #
\d ;
----------------------------------------------